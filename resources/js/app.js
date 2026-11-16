import './bootstrap';

const roleLoginForm = document.querySelector('[data-role-login]');

if (roleLoginForm instanceof HTMLFormElement) {
    const roleRoutes = {
        admin: '/admin',
        guru: '/guru',
        osis: '/osis',
    };

    roleLoginForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const selectedRole = roleLoginForm.querySelector('input[name="role"]:checked');

        if (selectedRole instanceof HTMLInputElement && Object.hasOwn(roleRoutes, selectedRole.value)) {
            window.location.assign(roleRoutes[selectedRole.value]);
        }
    });
}

const toastRegion = document.querySelector('[data-toast-region]');
let toastTimeout;

const showToast = (message) => {
    if (!(toastRegion instanceof HTMLElement)) {
        return;
    }

    toastRegion.textContent = message;
    toastRegion.classList.add('visible');
    window.clearTimeout(toastTimeout);
    toastTimeout = window.setTimeout(() => toastRegion.classList.remove('visible'), 3200);
};

document.querySelectorAll('[data-toast]').forEach((button) => {
    button.addEventListener('click', () => showToast(button.dataset.toast || 'Tindakan selesai.'));
});

document.querySelectorAll('[data-feedback-form]').forEach((form) => {
    if (!(form instanceof HTMLFormElement)) {
        return;
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        if (!form.reportValidity()) {
            return;
        }

        showToast(form.dataset.success || 'Simulasi formulir selesai; data belum disimpan ke database.');
    });
});

document.querySelectorAll('[data-scroll-to]').forEach((button) => {
    button.addEventListener('click', () => {
        document.getElementById(button.dataset.scrollTo || '')?.scrollIntoView({ behavior: 'smooth' });
    });
});

const searchableTables = [...document.querySelectorAll('[data-filter-table]')];
const searchInputs = [...document.querySelectorAll('[data-table-search]')];
let activeReportStatus = 'Semua';

const updateTables = () => {
    const query = searchInputs
        .map((input) => input instanceof HTMLInputElement ? input.value.trim().toLocaleLowerCase('id') : '')
        .find(Boolean) || '';

    searchableTables.forEach((table) => {
        const rows = [...table.querySelectorAll('tbody tr')].filter((row) => !row.classList.contains('guru-empty-row'));
        let visibleRows = 0;

        rows.forEach((row) => {
            const matchesQuery = row.textContent?.toLocaleLowerCase('id').includes(query) ?? false;
            const rowStatus = row.getAttribute('data-report-status');
            const matchesStatus = !rowStatus || activeReportStatus === 'Semua' || rowStatus === activeReportStatus;
            row.hidden = !matchesQuery || !matchesStatus;
            if (!row.hidden) visibleRows += 1;
        });

        const emptyRow = table.querySelector('.guru-empty-row');
        if (rows.length > 0 && visibleRows === 0) {
            if (!emptyRow) {
                const row = document.createElement('tr');
                row.className = 'guru-empty-row';
                row.innerHTML = `<td colspan="${table.querySelectorAll('thead th').length}">Tidak ada data yang cocok dengan pencarian atau filter.</td>`;
                table.querySelector('tbody')?.append(row);
            }
        } else {
            emptyRow?.remove();
        }
    });
};

searchInputs.forEach((input) => input.addEventListener('input', updateTables));

document.querySelectorAll('[data-filter-status]').forEach((button) => {
    button.addEventListener('click', () => {
        activeReportStatus = button.getAttribute('data-filter-status') || 'Semua';
        document.querySelectorAll('[data-filter-status]').forEach((tab) => tab.classList.toggle('active', tab === button));
        updateTables();
    });
});

const reportCheckboxes = () => [...document.querySelectorAll('[data-report-select]')]
    .filter((checkbox) => checkbox instanceof HTMLInputElement);

const updateSelectedCount = () => {
    const selected = reportCheckboxes().filter((checkbox) => checkbox.checked).length;
    document.querySelectorAll('[data-selected-count]').forEach((count) => {
        count.textContent = String(selected);
    });
};

document.querySelectorAll('[data-select-all]').forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        reportCheckboxes().forEach((rowCheckbox) => {
            rowCheckbox.checked = checkbox instanceof HTMLInputElement && checkbox.checked;
        });
        document.querySelectorAll('[data-select-all]').forEach((selectAll) => {
            if (selectAll instanceof HTMLInputElement) selectAll.checked = checkbox instanceof HTMLInputElement && checkbox.checked;
        });
        updateSelectedCount();
    });
});

reportCheckboxes().forEach((checkbox) => checkbox.addEventListener('change', updateSelectedCount));

const verifyReports = (rows) => {
    if (rows.length === 0) {
        showToast('Pilih setidaknya satu laporan untuk diverifikasi.');
        return;
    }

    rows.forEach((row) => {
        row.dataset.reportStatus = 'Terverifikasi';
        const statusCell = row.querySelector('td:last-child');
        if (statusCell) statusCell.innerHTML = '<span class="guru-status guru-status-success">Terverifikasi</span>';
        const checkbox = row.querySelector('[data-report-select]');
        if (checkbox instanceof HTMLInputElement) checkbox.checked = false;
    });

    document.querySelectorAll('[data-select-all]').forEach((checkbox) => {
        if (checkbox instanceof HTMLInputElement) checkbox.checked = false;
    });
    updateSelectedCount();
    updateTables();
    showToast(`Simulasi: ${rows.length} laporan ditandai terverifikasi di layar, belum disimpan ke database.`);
};

document.querySelector('[data-bulk-verify]')?.addEventListener('click', () => {
    const selectedRows = reportCheckboxes()
        .filter((checkbox) => checkbox.checked)
        .map((checkbox) => checkbox.closest('tr'))
        .filter((row) => row instanceof HTMLTableRowElement);
    verifyReports(selectedRows);
});

document.querySelectorAll('[data-review-action]').forEach((button) => {
    button.addEventListener('click', () => {
        const action = button.getAttribute('data-review-action');
        const row = document.querySelector('[data-report-status="Menunggu"]');

        if (row instanceof HTMLTableRowElement && action) {
            row.dataset.reportStatus = action;
            const statusCell = row.querySelector('td:last-child');
            if (statusCell) {
                const statusClass = action === 'Terverifikasi' ? 'guru-status-success' : 'guru-status-danger';
                statusCell.innerHTML = `<span class="guru-status ${statusClass}">${action}</span>`;
            }
            updateTables();
        }

        showToast(action === 'Terverifikasi'
            ? 'Simulasi: laporan ditandai terverifikasi di layar, belum disimpan ke database.'
            : 'Simulasi: laporan ditandai ditolak di layar, belum disimpan ke database.');
    });
});

document.querySelector('[data-reset-filters]')?.addEventListener('click', () => {
    document.querySelectorAll('.guru-history-filters input, .guru-history-filters select').forEach((field) => {
        if (field instanceof HTMLInputElement) field.value = '';
        if (field instanceof HTMLSelectElement) field.selectedIndex = 0;
    });
    searchInputs.forEach((input) => {
        if (input instanceof HTMLInputElement) input.value = '';
    });
    updateTables();
    showToast('Filter riwayat berhasil direset.');
});
