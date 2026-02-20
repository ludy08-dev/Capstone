<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Sign-Up Request List - Admin</title>
  <style>
    :root{
      --sidebar-bg:#0f1724;
      --header-bg:#ffffff;
      --panel-bg:#fbfdff;
      --accent:#0b6b8f;
      --muted:#6b7280;
      --success:#16a34a;
      --warning:#f59e0b;
      --danger:#ef4444;
      --shadow-strong: 0 12px 30px rgba(2,6,23,0.18);
      --shadow-soft: 0 6px 18px rgba(2,6,23,0.08);
      --font: "Segoe UI", Inter, Roboto, Arial, sans-serif;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:var(--font);background:linear-gradient(black, blue);color:#071029}
    a{color:inherit;text-decoration:none; }
    .app{display:flex;min-height:100vh;gap:0}
    .sidebar{
      width:180px;
      background:linear-gradient(180deg,var(--sidebar-bg), #07101a);
      color:#e6eef8;
      padding:20px;
      display:flex;
      flex-direction:column;
      box-shadow: 6px 0 24px rgba(2, 6, 23, 0.363), inset -6px 0 12px rgba(0,0,0,0.10);
      border-right:5px solid rgba(246, 255, 0, 0.808);
      position:relative;
      z-index:10;
    }
    .sidebar::after{content:"";position:absolute;top:0;right:0;height:100%;width:1px;background:linear-gradient(180deg, rgba(255,255,255,0.03), rgba(0,0,0,0.06));pointer-events:none;}
    .brand{display:flex;align-items:center;gap:12px;margin-bottom:18px}
    .brand img{height:100px;display:block; margin-left: 18px;}
    .nav{display:flex;flex-direction:column;gap:6px;margin-top:6px}
    .nav a{display:flex;align-items:center;gap:10px;padding:10px 12px;color:rgba(255,255,255,0.9);font-size:14px;transition:background .12s;border-radius:0}
    .nav a.active{background:rgba(255,255,255,0.03); border-left: 3px solid yellow;}
    .nav a:hover{background:rgba(255,255,255,0.03); border-left: 3px solid yellow;}
    .spacer{flex:1}
    .logout{background:#ff6b6b;padding:10px;text-align:center;color:#fff;font-weight:700;border-radius:0;display:block}
    .main{flex:1;display:flex;flex-direction:column;min-height:100vh;margin:0}
    .header{display:flex;align-items:center;justify-content:space-between;padding:14px 20px;background:var(--header-bg);box-shadow:var(--shadow-soft);border-bottom:1px solid rgba(11,27,40,0.04);margin:0;border-radius:0}
    .header-left{display:flex;align-items:center;gap:14px}
    .logo-wrap img{height:40px;display:block}
    .header-title{display:flex;flex-direction:column}
    .header-title .h1{font-size:18px;font-weight:700;color:#071029}
    .header-title .h2{font-size:13px;color:var(--muted)}
   .header-right {
  display:flex;
  align-items:center;
  gap:12px;
}

.welcome-text {
  font-size:16px;
  font-weight:700;
}
.welcome {
  color:yellow;
}
.admin {
  color:#071029;
}

.user-icon img {
  width:28px;
  height:28px;
}

.edp-logo img {
  width:60px;
  height:60px;
  object-fit:contain;
  border-radius:50%; /* circular logo */
 
}

.section-title {
  font-size:18px;
  font-weight:700;
  color:#071029;
}

.user-icon img {
  width:36px;
  height:36px;
  object-fit:cover;
  border-radius:50%; /* circular photo */
  cursor:pointer;
}

.admin-dropdown {
  position:absolute;
  top:60px; /* adjust depende sa header height */
  right:20px;
  background:#fff;
  box-shadow:0 6px 18px rgba(2,6,23,0.15);
  border:1px solid rgba(11,27,40,0.08);
  border-radius:6px;
  display:none;
  z-index:1000;
}
.admin-dropdown ul {
  list-style:none;
  margin:0;
  padding:8px 0;
}
.admin-dropdown li {
  padding:8px 16px;
  font-size:14px;
  color:#071029;
  cursor:pointer;
  display:flex;
  align-items:center;
  gap:8px;
}
.admin-dropdown li:hover {
  background:#f6fbff;
}

    .content{padding:18px;flex:1;overflow:auto;margin:0;}
    .card{background:var(--panel-bg);padding:18px;box-shadow:var(--shadow-soft);border:1px solid rgba(11,27,40,0.03);border-radius:5px;}
    .filters{display:flex;gap:12px;align-items:center;flex-wrap:wrap;margin-bottom:12px}
    .filters select,.filters input{padding:8px 10px;border:1px solid rgba(11,27,40,0.06);background:#fff;font-size:14px;border-radius:0}
    .filters .spacer{flex:1}
    .table-wrap{overflow:auto;border-radius:0}
    table{width:100%;border-collapse:collapse;min-width:920px}
    thead th{position:sticky;top:0;background:linear-gradient(180deg,#0b3b4f,#08323f);color:#fff;padding:12px 14px;text-align:left;font-weight:700;font-size:13px;border-radius:0}
    tbody td{padding:12px 14px;border-bottom:1px solid rgba(11,27,40,0.04);font-size:14px;color:#071029}
    tbody tr:hover{background:#f6fbff}
    .status{font-weight:700;padding:6px 10px;border-radius:0;font-size:12px;display:inline-block}
    .status.approved{color:var(--success);background:rgba(22,163,74,0.08)}
    .status.pending{color:var(--warning);background:rgba(245,158,11,0.08)}
    .actions button{padding:6px 10px;border:0;background:var(--accent);color:#fff;cursor:pointer;font-size:13px;border-radius:0}
    .modal{position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(2,6,23,0.45);z-index:1200}
    .modal.show{display:flex}
    .modal-card{width:520px;background:#fff;padding:18px;box-shadow:0 20px 50px rgba(2,6,23,0.35);border-radius:0}
    .modal-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
    .modal-body{display:grid;grid-template-columns:1fr 1fr;gap:10px}
    .field{font-size:13px;color:var(--muted);margin-bottom:6px}
    .value{font-weight:700;color:#071029}
    .modal-actions{display:flex;gap:8px;justify-content:flex-end;margin-top:14px}
    .btn{padding:8px 12px;border:0;cursor:pointer;font-weight:700}
    .btn.primary{background:var(--accent);color:#fff}
    .btn.success{background:var(--success);color:#fff}
    .btn.warning{background:var(--warning);color:#fff}
    .btn.danger{background:var(--danger);color:#fff}
    @media (max-width:980px){
      .app{flex-direction:column}
      .sidebar{width:100%;flex-direction:row;align-items:center;padding:12px;min-height:auto}
      .nav{flex-direction:row;gap:6px;overflow:auto}
      .header{padding:12px}
      .content{padding:12px}
      .table-wrap{min-width:unset}
      .modal-card{width:92%}
    }

    .office-status.approved {
  color: #16a34a; /* green */
  background: rgba(22,163,74,0.08);
  font-weight: 700;
  padding: 4px 8px;
  border-radius: 6px;
  display:inline-block;
}
.office-status.pending {
  color: #f59e0b; /* orange */
  background: rgba(245,158,11,0.08);
  font-weight: 700;
  padding: 4px 8px;
  border-radius: 6px;
  display:inline-block;
}
.note {
  font-size: 12px;
  color: #000000; /* muted gray */
  margin-top: 2px;
  text-align: center;
}
.count-pill {
  display:inline-block;
  padding:4px 8px;
  border-radius:999px;
  background:#eef9fb;
  color:#0b6b8f;
  font-weight:700;
}
.modal {
  position:fixed;
  inset:0;
  display:none;
  align-items:center;
  justify-content:center;
  background:rgba(2,6,23,0.45);
  z-index:1200;
}
.modal.show { display:flex; }

.modal-card {
  width:400px;
  background:#fff;
  padding:18px;
  box-shadow:0 20px 50px rgba(2,6,23,0.35);
  border-radius:6px;
}
.modal-header {
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:12px;
}
.modal-body {
  display:flex;
  flex-direction:column;
  gap:10px;
}
.modal-body .field {
  font-size:13px;
  color:var(--muted);
}
.modal-body .value {
  padding:8px;
  border:1px solid rgba(11,27,40,0.1);
  border-radius:4px;
}
.modal-actions {
  display:flex;
  gap:8px;
  justify-content:flex-end;
  margin-top:14px;
}


  </style>
</head>
<body>
  <div class="app">
    <!-- Sidebar -->
    <aside class="sidebar" aria-label="Sidebar navigation">
      <div class="brand">
        <img src="LOGO.png" alt="LOGO emblem" />
      </div>

      <nav class="nav" aria-label="Main navigation">
        <a href="#" class="active" data-section="signup">Sign Up Request</a>
        <a href="#" data-section="dashboard">Dashboard</a>
        <a href="#" data-section="services">Request Services</a>
        <a href="#" data-section="tracker">Offices Refund Approval Tracker</a>
      </nav>

      <div class="spacer" aria-hidden="true"></div>

      <a class="logout" href="#" id="logoutBtn">Logout</a>
    </aside>

    <!-- Main -->
    <main class="main" role="main">
      <!-- Header -->
      <header class="header" role="banner">
  <!-- Left side: section title -->
  <div class="header-left">
    <div class="section-icon">
      <img src="clipboard.png" alt="Section icon" />
    </div>
    <div class="section-title">Sign-Up Request List</div>
  </div>

  <!-- Right side: welcome text + user icon + logo -->
  <div class="header-right">
  <div class="welcome-text">
    <span class="welcome">Welcome,</span>
    <span class="admin">Admin</span>
  </div>
  <!-- Admin photo icon -->
  <div class="user-icon" id="adminMenuToggle">
    <img src="user.png" alt="Admin photo" />
  </div>
  <div class="edp-logo">
    <img src="EDP.png" alt="EDP Logo" />
  </div>

  <!-- Dropdown menu -->
  <div class="admin-dropdown" id="adminDropdown">
    <ul>
      <li><span class="icon">👤</span> Admin Info</li>
      <li><span class="icon">🔒</span> Change Password</li>
      <li><span class="icon">🚪</span> Sign out</li>
    </ul>
  </div>
</div>

<!-- Change Password Modal -->
<div class="modal" id="changePasswordModal">
  <div class="modal-card">
    <div class="modal-header">
      <h3>Change Password</h3>
      <button id="closeModalBtn" class="btn danger">×</button>
    </div>
    <div class="modal-body">
      <div class="field">Current Password</div>
      <input type="password" id="currentPassword" class="value" />

      <div class="field">New Password</div>
      <input type="password" id="newPassword" class="value" />

      <div class="field">Confirm New Password</div>
      <input type="password" id="confirmPassword" class="value" />
    </div>
    <div class="modal-actions">
      <button id="closeBtn" class="btn">Close</button>
      <button id="saveBtn" class="btn primary">Save Changes</button>
    </div>
  </div>
</div>

  
</header>

      <!-- Content area: both sections live here; only one visible at a time -->
      <div class="content">
        <!-- Sign-Up Request Section (default visible) -->
        <section id="signupSection" class="section card" aria-labelledby="tableHeading">
          

          <div class="filters">
            <select id="filterType" title="Filter by account type">
              <option value="">All Account Types</option>
              <option value="Student">Student</option>
              <option value="Personnel">Personnel</option>
            </select>

            <select id="filterMonth" title="Filter by month">
              <option value="">All Months</option>
              <option value="01">January</option>
              <option value="02">February</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>

            <select id="filterYear" title="Filter by year">
              <option value="">All Years</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
            </select>

            <select id="filterStatus" title="Filter by status">
              <option value="">All Status</option>
              <option value="APPROVED">Approved</option>
              <option value="PENDING">Pending</option>
            </select>

            <div class="spacer"></div>

            <div class="search">
              <input id="searchInput" type="search" placeholder="Search by ID or name" aria-label="Search requests" />
            </div>

            <button id="clearFilters" class="btn" style="background:#eef6fb;color:#071029">Clear</button>
          </div>

          <div class="table-wrap" role="region" aria-live="polite">
            <table id="requestsTable" aria-label="Sign-up requests table">
              <thead>
                <tr>
                  <th data-key="id" class="sortable" scope="col">ID Number ▲▼</th>
                  <th data-key="name" class="sortable" scope="col">Name ▲▼</th>
                  <th data-key="type" class="sortable" scope="col">Account Type ▲▼</th>
                  <th data-key="date" class="sortable" scope="col">Date Requested ▲▼</th>
                  <th data-key="status" class="sortable" scope="col">Status ▲▼</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </section>

        <!-- Request Services Section (hidden by default) -->
        <section id="servicesSection" class="section card" style="display:none" aria-labelledby="servicesHeading">

          <div class="filters">
            <select id="serviceFilterType">
              <option value="">All Request Types</option>
              <option value="Document">Document</option>
              <option value="ID Replacement">ID Replacement</option>
              <option value="Wi-Fi Extension">Wi-Fi Extension</option>
              <option value="E-Tarp Design">E-Tarp Design</option>
              <option value="Refund">Refund</option>
            </select>
            <select id="serviceFilterMonth">
              <option value="">All Months</option>
              <option value="10">October</option>
            </select>
            <select id="serviceFilterYear">
              <option value="">All Years</option>
              <option value="2025">2025</option>
            </select>
            <select id="serviceFilterStatus">
              <option value="">All Status</option>
              <option value="PENDING">Pending</option>
              <option value="APPROVED">Approved</option>
            </select>
            <div class="spacer"></div>
            <input type="search" id="serviceSearch" placeholder="Search by ID or name">
            <button id="serviceClearFilters" class="btn">Clear</button>
          </div>

          <div class="table-wrap">
            <table id="servicesTable">
              <thead>
                <tr>
                  <th>ID Number</th>
                  <th>Name</th>
                  <th>Request Type</th>
                  <th>Date Requested</th>
                  <th>Status</th>
                  <th>Days Processing</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
<section class="card" id="refundTrackerCard" style="display:none">
  <!-- header + filters -->
  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px">
  
    <div style="display:flex;gap:8px;align-items:center">
      <input id="trackerSearch" type="search" placeholder="Search by ID or name" />
      <select id="trackerFilterStatus">
        <option value="">All Status</option>
        <option value="fully">Fully Approved</option>
        <option value="partial">Partially Approved</option>
        <option value="none">No Approvals</option>
      </select>
    </div>
  </div>

  <!-- table -->
  <div class="table-wrap">
    <table id="trackerTable">
      <thead>
        <tr>
          <th>ID Number</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Date Requested</th>
          <th>Scholarship</th>
          <th>EDP</th>
          <th>Cashier</th>
          <th>Finance</th>
          <th>Approved Offices</th>
          <th>Days Processing</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</section>

    <!-- Dashboard Section -->
<section class="card" id="dashboardCard" style="display:none">
  <h3>Reports Charts</h3>
  <div class="filters">
    <select id="reportSelect">
      <option value="all">Select Report</option>
      <option value="refunds">Refunds</option>
      <option value="services">Services</option>
    </select>
    <select id="monthSelect">
      <option value="all">All Months</option>
      <option value="1">January</option>
      <option value="2">February</option>
      <!-- add more months -->
    </select>
    <select id="yearSelect">
      <option value="all">All Years</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
    </select>
    <button id="generateBtn" class="btn primary">Generate</button>
  </div>

  <div style="display:flex;gap:20px;flex-wrap:wrap">
    <div style="flex:1;min-width:300px">
      <h4>Month Breakdown</h4>
      <canvas id="monthBreakdownChart"></canvas>
    </div>
    <div style="flex:2;min-width:400px">
      <h4>Monthly Trend</h4>
      <canvas id="monthlyTrendChart"></canvas>
    </div>
  </div>
</section>
<!-- Service Requests Dashboard Section -->
<section class="card" id="servicesDashboardCard" style="display:none">
  <h3>Service Requests Statistics</h3>

  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px">
    <!-- Services Statistics -->
    <div class="stat-block">
      <h4>Services Statistics</h4>
      <ul>
        <li>Refund: <span id="refundCount">0</span></li>
        <li>Password Reset: <span id="resetCount">0</span></li>
        <li>E-tarp Design: <span id="etarpCount">0</span></li>
        <li>ID Replacement: <span id="idCount">0</span></li>
        <li>Wi-fi Extension: <span id="wifiCount">0</span></li>
        <li>Document: <span id="docCount">0</span></li>
      </ul>
    </div>

    <!-- Request Statistics -->
    <div class="stat-block">
      <h4>Request Statistics</h4>
      <ul>
        <li>Total: <span id="totalCount">0</span></li>
        <li>Approved: <span id="approvedCount">0</span></li>
        <li>Rejected: <span id="rejectedCount">0</span></li>
        <li>Completed: <span id="completedCount">0</span></li>
      </ul>
    </div>

    <!-- Pending Request -->
    <div class="stat-block">
      <h4>Pending Request</h4>
      <div class="pending-number" id="pendingCount">0</div>
      <button class="btn primary" id="viewPendingBtn">View all Pending</button>
    </div>

    <!-- Request Reports -->
    <div class="stat-block">
      <h4>Request Reports</h4>
      <div class="report-buttons">
        <button class="btn">Refund</button>
        <button class="btn">Document</button>
        <button class="btn">ID Replacement</button>
        <button class="btn">E-tarp Design</button>
        <button class="btn">Wi-Fi Extension</button>
        <button class="btn">Reset Password</button>
      </div>
      <button class="btn primary" id="generateReportBtn">Generate</button>
    </div>
  </div>
</section>

      </div>
    </main>
  </div>

  <!-- Modal -->
  <div class="modal" id="modal" aria-hidden="true">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <div class="modal-header">
        <div>
          <div id="modalTitle" style="font-weight:700">Request Details</div>
          <div class="muted" id="modalSubtitle">View and manage request</div>
        </div>
      </div>

      <div class="modal-body" id="modalBody"></div>

      <div class="modal-actions">
        <button class="btn success" id="approveBtn">Approve</button>
        <div>
          <button class="btn" id="closeModal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // SECTION TOGGLE (keeps sidebar/header intact)
      const navLinks = document.querySelectorAll('.nav a[data-section]');
      function showSection(key) {
        document.querySelectorAll('.section').forEach(s => s.style.display = 'none');
        const el = document.getElementById(key + 'Section');
        if (el) el.style.display = 'block';
        navLinks.forEach(a => a.classList.toggle('active', a.dataset.section === key));
      }
      navLinks.forEach(a => {
        a.addEventListener('click', e => {
          e.preventDefault();
          const key = a.dataset.section;
          if (!key) return;
          showSection(key);
        });
      });
      // default
      const defaultKey = document.querySelector('.nav a.active')?.dataset.section || 'signup';
      showSection(defaultKey);

      /* -------------------------
         Sign-up requests (localStorage)
         ------------------------- */
      const STORAGE_KEY = 'signup_requests_v3';
      const initialData = [
        { id: '201800426', name: 'RD Laine R. Ando', type: 'Student', date: '2025-08-05', status: 'APPROVED', email: 'rdlaine@example.com', notes: 'Verified student ID' },
        { id: '202500236', name: 'Jasmine Rose Pepito', type: 'Personnel', date: '2025-08-05', status: 'PENDING', email: 'jasmine.pepito@example.com', notes: 'Awaiting HR confirmation' },
        { id: '202400426', name: 'Donjie Castino', type: 'Personnel', date: '2025-08-05', status: 'PENDING', email: 'donjie.castino@example.com', notes: 'Missing documents' }
      ];
      function loadData(){
        try{
          const raw = localStorage.getItem(STORAGE_KEY);
          if(!raw){ localStorage.setItem(STORAGE_KEY, JSON.stringify(initialData)); return initialData.slice(); }
          return JSON.parse(raw);
        }catch(e){
          console.error(e);
          localStorage.setItem(STORAGE_KEY, JSON.stringify(initialData));
          return initialData.slice();
        }
      }
      function saveData(data){ localStorage.setItem(STORAGE_KEY, JSON.stringify(data)); }
      let requests = loadData();

      const tbody = document.querySelector('#requestsTable tbody');
      const filterType = document.getElementById('filterType');
      const filterMonth = document.getElementById('filterMonth');
      const filterYear = document.getElementById('filterYear');
      const filterStatus = document.getElementById('filterStatus');
      const searchInput = document.getElementById('searchInput');
      const clearFiltersBtn = document.getElementById('clearFilters');
      const modal = document.getElementById('modal');
      const modalBody = document.getElementById('modalBody');
      const closeModalBtn = document.getElementById('closeModal');
      const approveBtn = document.getElementById('approveBtn');

      let currentSort = { key: 'date', dir: 'desc' };
      let currentSelectedId = null;

      function formatDateISOToDisplay(iso){
        if(!iso) return '';
        const d = new Date(iso);
        const mm = String(d.getMonth()+1).padStart(2,'0');
        const dd = String(d.getDate()).padStart(2,'0');
        const yyyy = d.getFullYear();
        return `${mm}-${dd}-${yyyy}`;
      }
      function compare(a,b,key){
        if(key === 'date') return new Date(a.date) - new Date(b.date);
        return String(a[key]).localeCompare(String(b[key]), undefined, {numeric:true, sensitivity:'base'});
      }

      function renderTable(){
        if(!tbody) return;
        const q = (searchInput?.value || '').trim().toLowerCase();
        const ft = filterType?.value;
        const fm = filterMonth?.value;
        const fy = filterYear?.value;
        const fs = filterStatus?.value;

        let filtered = requests.filter(r => {
          if(ft && r.type !== ft) return false;
          if(fm){
            const month = r.date.split('-')[1];
            if(month !== fm) return false;
          }
          if(fy){
            const year = r.date.split('-')[0];
            if(year !== fy) return false;
          }
          if(fs && r.status !== fs) return false;
          if(q){
            return r.id.toLowerCase().includes(q) || r.name.toLowerCase().includes(q) || (r.email && r.email.toLowerCase().includes(q));
          }
          return true;
        });

        filtered.sort((a,b) => {
          const res = compare(a,b,currentSort.key);
          return currentSort.dir === 'asc' ? res : -res;
        });

        tbody.innerHTML = '';
        if(filtered.length === 0){
          const tr = document.createElement('tr');
          const td = document.createElement('td');
          td.colSpan = 6; td.style.textAlign = 'center'; td.style.padding = '28px'; td.className = 'muted';
          td.textContent = 'No requests found';
          tr.appendChild(td); tbody.appendChild(tr); return;
        }

        filtered.forEach(r => {
          const tr = document.createElement('tr'); tr.dataset.id = r.id;
          tr.innerHTML = `
            <td>${r.id}</td>
            <td>${r.name}</td>
            <td>${r.type}</td>
            <td>${formatDateISOToDisplay(r.date)}</td>
            <td><span class="status ${r.status === 'APPROVED' ? 'approved' : 'pending'}">${r.status}</span></td>
            <td class="actions">
              <button class="view">View Details</button>
              <button class="secondary">Approve</button>
            </td>
          `;
          tr.querySelector('.view').addEventListener('click', () => openModal(r.id));
          tr.querySelector('.secondary').addEventListener('click', (e) => { e.stopPropagation(); updateStatus(r.id, 'APPROVED'); });
          tbody.appendChild(tr);
        });
      }

      document.querySelectorAll('th.sortable').forEach(th => {
        th.style.cursor = 'pointer';
        th.addEventListener('click', () => {
          const key = th.dataset.key;
          if(!key) return;
          if(currentSort.key === key) currentSort.dir = currentSort.dir === 'asc' ? 'desc' : 'asc';
          else { currentSort.key = key; currentSort.dir = 'asc'; }
          renderTable();
        });
      });

      [filterType, filterMonth, filterYear, filterStatus].forEach(el => { if(el) el.addEventListener('change', renderTable); });
      if(searchInput) searchInput.addEventListener('input', renderTable);
      if(clearFiltersBtn) clearFiltersBtn.addEventListener('click', () => {
        if(filterType) filterType.value = '';
        if(filterMonth) filterMonth.value = '';
        if(filterYear) filterYear.value = '';
        if(filterStatus) filterStatus.value = '';
        if(searchInput) searchInput.value = '';
        renderTable();
      });

      function openModal(id){
        currentSelectedId = id;
        const r = requests.find(x => x.id === id);
        if(!r) return;
        if(!modalBody || !modal) return;
        modalBody.innerHTML = `
          <div>
            <div class="field">ID Number</div><div class="value">${r.id}</div>
            <div class="field" style="margin-top:12px">Account Type</div><div class="value">${r.type}</div>
            <div class="field" style="margin-top:12px">Email</div><div class="value">${r.email || '-'}</div>
          </div>
          <div>
            <div class="field">Name</div><div class="value">${r.name}</div>
            <div class="field" style="margin-top:12px">Date Requested</div><div class="value">${formatDateISOToDisplay(r.date)}</div>
            <div class="field" style="margin-top:12px">Status</div><div class="value">${r.status}</div>
          </div>
          <div style="grid-column:1/-1;margin-top:8px">
            <div class="field">Notes</div>
            <div style="padding:10px;background:#f6fbff">${r.notes || '-'}</div>
          </div>
        `;
        modal.classList.add('show'); modal.setAttribute('aria-hidden','false');
      }
      function closeModal(){ currentSelectedId = null; if(modal){ modal.classList.remove('show'); modal.setAttribute('aria-hidden','true'); } }
      if(closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
      if(modal) modal.addEventListener('click', (e) => { if(e.target === modal) closeModal(); });
      if(approveBtn) approveBtn.addEventListener('click', () => { if(!currentSelectedId) return; updateStatus(currentSelectedId, 'APPROVED'); closeModal(); });

      function updateStatus(id, status){
        const idx = requests.findIndex(r => r.id === id);
        if(idx === -1) return;
        requests[idx].status = status; saveData(requests); renderTable();
      }

      if(tbody) tbody.addEventListener('dblclick', (e) => {
        const tr = e.target.closest('tr'); if(!tr) return;
        const id = tr.dataset.id; if(id) openModal(id);
      });

      renderTable();

      const logoutBtn = document.getElementById('logoutBtn');
      if(logoutBtn) logoutBtn.addEventListener('click', (e) => { e.preventDefault(); alert('Logged out (demo).'); });

      /* -------------------------
         REQUEST FORM (demo data + filters)
         ------------------------- */
      const servicesData = [
        { id: '202500123', name: 'Juan Dela Cruz', type: 'Document', date: '2025-10-30', status: 'PENDING', days: '3 days', action: 'View Form Request' },
        { id: '202500124', name: 'Juan Dela Cruz', type: 'ID Replacement', date: '2025-10-28', status: 'PENDING', days: '5 days', action: 'View Form Request' },
        { id: '202500125', name: 'Juan Dela Cruz', type: 'Wi-Fi Extension', date: '2025-10-25', status: 'PENDING', days: '8 days', action: 'View Form Request' },
        { id: '202500126', name: 'Juan Dela Cruz', type: 'E-Tarp Design', date: '2025-10-31', status: 'PENDING', days: '2 days', action: 'View Form Request' },
        { id: '202500127', name: 'Juan Dela Cruz', type: 'Refund', date: '2025-10-29', status: 'PENDING', days: '4 days', action: 'View Receipt' }
      ];

      const servicesTbody = document.querySelector('#servicesTable tbody');
      const sFilterType = document.getElementById('serviceFilterType');
      const sFilterMonth = document.getElementById('serviceFilterMonth');
      const sFilterYear = document.getElementById('serviceFilterYear');
      const sFilterStatus = document.getElementById('serviceFilterStatus');
      const sSearch = document.getElementById('serviceSearch');
      const sClear = document.getElementById('serviceClearFilters');

      function renderServicesTable(){
        if(!servicesTbody) return;
        const q = (sSearch?.value || '').trim().toLowerCase();
        const ft = sFilterType?.value;
        const fm = sFilterMonth?.value;
        const fy = sFilterYear?.value;
        const fs = sFilterStatus?.value;

        let filtered = servicesData.filter(r => {
          if(ft && r.type !== ft) return false;
          if(fm){
            const month = r.date.split('-')[1];
            if(month !== fm) return false;
          }
          if(fy){
            const year = r.date.split('-')[0];
            if(year !== fy) return false;
          }
          if(fs && r.status !== fs) return false;
          if(q){
            return r.id.toLowerCase().includes(q) || r.name.toLowerCase().includes(q);
          }
          return true;
        });

        servicesTbody.innerHTML = '';
        if(filtered.length === 0){
          const tr = document.createElement('tr');
          const td = document.createElement('td');
          td.colSpan = 7; td.style.textAlign = 'center'; td.style.padding = '28px'; td.className = 'muted';
          td.textContent = 'No service requests found';
          tr.appendChild(td); servicesTbody.appendChild(tr); return;
        }

        filtered.forEach(r => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>${r.id}</td>
            <td>${r.name}</td>
            <td>${r.type}</td>
            <td>${r.date}</td>
            <td><span class="status ${r.status === 'APPROVED' ? 'approved' : 'pending'}">${r.status}</span></td>
            <td>${r.days}</td>
            <td><button class="view-service">${r.action}</button></td>
          `;
          tr.querySelector('.view-service').addEventListener('click', () => {
            if(!modalBody || !modal) return;
            modalBody.innerHTML = `
              <div>
                <div class="field">ID Number</div><div class="value">${r.id}</div>
                <div class="field" style="margin-top:12px">Request Type</div><div class="value">${r.type}</div>
                <div class="field" style="margin-top:12px">Status</div><div class="value">${r.status}</div>
              </div>
              <div>
                <div class="field">Name</div><div class="value">${r.name}</div>
                <div class="field" style="margin-top:12px">Date Requested</div><div class="value">${r.date}</div>
                <div class="field" style="margin-top:12px">Days Processing</div><div class="value">${r.days}</div>
              </div>
              <div style="grid-column:1/-1;margin-top:8px">
                <div class="field">Notes</div>
                <div style="padding:10px;background:#f6fbff">No additional notes</div>
              </div>
            `;
            modal.classList.add('show'); modal.setAttribute('aria-hidden','false');
          });
          servicesTbody.appendChild(tr);
        });
      }

      [sFilterType, sFilterMonth, sFilterYear, sFilterStatus].forEach(el => { if(el) el.addEventListener('change', renderServicesTable); });
      if(sSearch) sSearch.addEventListener('input', renderServicesTable);
      if(sClear) sClear.addEventListener('click', () => {
        if(sFilterType) sFilterType.value = '';
        if(sFilterMonth) sFilterMonth.value = '';
        if(sFilterYear) sFilterYear.value = '';
        if(sFilterStatus) sFilterStatus.value = '';
        if(sSearch) sSearch.value = '';
        renderServicesTable();
      });

      renderServicesTable();
    });
  </script>

  <script>
document.addEventListener('DOMContentLoaded', () => {
  const headerTitleEl = document.querySelector('.header-title .h1');
  const headerSubtitleEl = document.querySelector('.header-title .h2');

  const sectionMeta = {
    signup: { title: 'Sign-Up Request List', subtitle: 'Manage incoming account sign-up requests' },
    dashboard: { title: 'Dashboard', subtitle: 'Overview and quick stats' },
    services: { title: 'Request Services List', subtitle: 'Track and manage service requests' },
    tracker: { title: 'Offices Refund Approval Tracker', subtitle: 'Monitor refund approvals and status' }
  };

  const navLinks = Array.from(document.querySelectorAll('.nav a[data-section]'));

  function updateHeaderFor(key) {
    const meta = sectionMeta[key];
    if (!meta) return;
    if (headerTitleEl) headerTitleEl.textContent = meta.title;
    if (headerSubtitleEl) headerSubtitleEl.textContent = meta.subtitle;
  }

  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const key = link.dataset.section;
      if (!key) return;
      updateHeaderFor(key);
      navLinks.forEach(a => a.classList.toggle('active', a === link));
    });
  });

  const active = document.querySelector('.nav a.active[data-section]');
  if (active && active.dataset.section) updateHeaderFor(active.dataset.section);
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // --- CONFIG: kung may receipt image URL, ilagay sa servicesData item bilang .receipt
  // Example: { id: '202500127', ..., receipt: 'receipts/202500127.jpg' }

  // Grab references
  const servicesTbody = document.querySelector('#servicesTable tbody');
  const modal = document.getElementById('modal');
  const modalBody = document.getElementById('modalBody');
  const approveBtn = document.getElementById('approveBtn');
  const closeModalBtn = document.getElementById('closeModal');

  // Keep track of currently opened service id in modal
  let currentServiceId = null;

  // Helper: open modal with arbitrary HTML content
  function openModalWithHtml(html) {
    if (!modal || !modalBody) return;
    modalBody.innerHTML = html;
    modal.classList.add('show');
    modal.setAttribute('aria-hidden','false');
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.remove('show');
    modal.setAttribute('aria-hidden','true');
    currentServiceId = null;
  }

  // Show receipt image (or fallback message)
  function showReceipt(id) {
    const item = window.servicesData?.find(s => s.id === id);
    if (!item) {
      openModalWithHtml('<div style="padding:20px">Receipt not found.</div>');
      return;
    }
    currentServiceId = id;
    if (item.receipt) {
      // image container: responsive, max-height
      openModalWithHtml(`
        <div style="text-align:center">
          <div class="field">Receipt for ${item.id}</div>
          <img src="${item.receipt}" alt="Receipt ${item.id}" style="max-width:100%;max-height:60vh;border:1px solid #eee;padding:8px;background:#fff" />
        </div>
      `);
    } else {
      openModalWithHtml(`
        <div style="padding:18px">
          <div class="field">No receipt uploaded</div>
          <div style="margin-top:8px;color:var(--muted)">This request has no receipt image attached.</div>
        </div>
      `);
    }
  }

  // Show form request details (reuse existing modal layout)
  function showFormRequest(id) {
    const item = window.servicesData?.find(s => s.id === id);
    if (!item) {
      openModalWithHtml('<div style="padding:20px">Form not found.</div>');
      return;
    }
    currentServiceId = id;
    openModalWithHtml(`
      <div>
        <div class="field">ID Number</div><div class="value">${item.id}</div>
        <div class="field" style="margin-top:12px">Request Type</div><div class="value">${item.type}</div>
        <div class="field" style="margin-top:12px">Status</div><div class="value">${item.status}</div>
      </div>
      <div>
        <div class="field">Name</div><div class="value">${item.name}</div>
        <div class="field" style="margin-top:12px">Date Requested</div><div class="value">${item.date}</div>
        <div class="field" style="margin-top:12px">Days Processing</div><div class="value">${item.days || '-'}</div>
      </div>
      <div style="grid-column:1/-1;margin-top:8px">
        <div class="field">Notes</div>
        <div style="padding:10px;background:#f6fbff">${item.notes || 'No additional notes'}</div>
      </div>
    `);
  }

  // Update service status and update button text in table
  function setServiceStatus(id, newStatus) {
    if (!window.servicesData) return;
    const idx = window.servicesData.findIndex(s => s.id === id);
    if (idx === -1) return;
    window.servicesData[idx].status = newStatus;
    // re-render table if you have a renderServicesTable function; otherwise update row directly
    if (typeof renderServicesTable === 'function') {
      renderServicesTable();
    } else {
      // fallback: update button text in DOM
      const row = servicesTbody.querySelector(`tr[data-id="${id}"]`);
      if (row) {
        const actionBtn = row.querySelector('button.view-service, button.view');
        if (actionBtn) {
          // if approved and there was a receipt, show "View Form Request" else keep original
          if (newStatus === 'APPROVED') actionBtn.textContent = 'View Form Request';
          else actionBtn.textContent = (window.servicesData[idx].action || 'View').includes('Receipt') ? 'View Receipt' : (window.servicesData[idx].action || 'View');
        }
        const statusSpan = row.querySelector('.status');
        if (statusSpan) {
          statusSpan.textContent = newStatus;
          statusSpan.classList.toggle('approved', newStatus === 'APPROVED');
          statusSpan.classList.toggle('pending', newStatus !== 'APPROVED');
        }
      }
    }
  }

  // Event delegation for services table clicks (handles both View Receipt and View Form Request)
  if (servicesTbody) {
    servicesTbody.addEventListener('click', (e) => {
      const btn = e.target.closest('button');
      if (!btn) return;
      const tr = btn.closest('tr');
      if (!tr) return;
      const id = tr.dataset.id || tr.querySelector('td')?.textContent?.trim();
      if (!id) return;

      const text = (btn.textContent || '').trim().toLowerCase();
      if (text.includes('receipt')) {
        // show receipt image
        showReceipt(id);
        return;
      }
      if (text.includes('form')) {
        // show form request details
        showFormRequest(id);
        return;
      }
      if (text.includes('view')) {
        // fallback: if item has receipt and status pending -> show receipt; else show form
        const item = window.servicesData?.find(s => s.id === id);
        if (item) {
          if (item.receipt && item.status !== 'APPROVED') showReceipt(id);
          else showFormRequest(id);
        }
      }
    });
  }

  // Approve button in modal: if modal opened for a service, approve it and update button text
  if (approveBtn) {
    approveBtn.addEventListener('click', () => {
      if (!currentServiceId) return;
      // update servicesData if present
      if (window.servicesData) {
        const s = window.servicesData.find(x => x.id === currentServiceId);
        if (s) {
          s.status = 'APPROVED';
        }
      }
      // update UI
      setServiceStatus(currentServiceId, 'APPROVED');
      closeModal();
    });
  }

  // Close modal handlers
  if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
  if (modal) modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });

  // If your renderServicesTable function exists, ensure it sets each <tr data-id="..."> and the action button text
  // Example minimal guidance (only if you need it):
  // - Each services row should be rendered with: <tr data-id="${r.id}"> ... <td><button class="view-service">${r.status === 'APPROVED' ? 'View Form Request' : (r.action || 'View Receipt')}</button></td></tr>
});
</script>


<script>
document.addEventListener('DOMContentLoaded', () => {
  // Make sure your services data includes a `type` field (e.g., 'Refund', 'Document', etc.)
  window.servicesData = window.servicesData || [
    { id: '202500123', name: 'Juan Dela Cruz', type: 'Document', date: '2025-10-30', status: 'PENDING', days: '3 days', receipt: '', notes: '' },
    { id: '202500124', name: 'Juan Dela Cruz', type: 'ID Replacement', date: '2025-10-28', status: 'PENDING', days: '5 days', receipt: '', notes: '' },
    { id: '202500125', name: 'Juan Dela Cruz', type: 'Wi-Fi Extension', date: '2025-10-25', status: 'PENDING', days: '8 days', receipt: '', notes: '' },
    { id: '202500126', name: 'Juan Dela Cruz', type: 'E-Tarp Design', date: '2025-10-31', status: 'PENDING', days: '2 days', receipt: '', notes: '' },
    { id: '202500127', name: 'Juan Dela Cruz', type: 'Refund', date: '2025-10-29', status: 'PENDING', days: '4 days', receipt: 'receipts/202500127.jpg', notes: '' }
  ];

  const servicesTbody = document.querySelector('#servicesTable tbody');
  const modal = document.getElementById('modal');
  const modalBody = document.getElementById('modalBody');
  const approveBtn = document.getElementById('approveBtn');
  const closeModalBtn = document.getElementById('closeModal');

  let modalCurrentId = null;

  // Render table: show "View Receipt" only for Refund type (and only if not APPROVED)
  function renderServicesTable() {
    if (!servicesTbody) return;
    servicesTbody.innerHTML = '';
    window.servicesData.forEach(item => {
      const tr = document.createElement('tr');
      tr.dataset.id = item.id;

      // Determine action button text:
      // - If already approved -> "View Form Request"
      // - Else if type === 'Refund' -> "View Receipt"
      // - Else -> "View Form Request"
      const actionText = item.status === 'APPROVED'
        ? 'View Form Request'
        : (String(item.type).toLowerCase() === 'refund' ? 'View Receipt' : 'View Form Request');

      tr.innerHTML = `
        <td>${item.id}</td>
        <td>${item.name}</td>
        <td>${item.type}</td>
        <td>${item.date}</td>
        <td><span class="status ${item.status === 'APPROVED' ? 'approved' : 'pending'}">${item.status}</span></td>
        <td>${item.days || '-'}</td>
        <td><button class="view-service">${actionText}</button></td>
      `;
      servicesTbody.appendChild(tr);
    });
  }

  function openModalHtml(html, idForModal = null) {
    if (!modal || !modalBody) return;
    modalBody.innerHTML = html;
    modal.classList.add('show');
    modal.setAttribute('aria-hidden', 'false');
    modalCurrentId = idForModal;
  }

  function closeModal() {
    if (!modal) return;
    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
    modalCurrentId = null;
  }

  // Delegate clicks on services table buttons
  document.addEventListener('click', (e) => {
    const btn = e.target.closest('#servicesTable button');
    if (!btn) return;
    const tr = btn.closest('tr');
    if (!tr) return;
    const id = tr.dataset.id;
    const text = (btn.textContent || '').trim().toLowerCase();
    const item = window.servicesData.find(s => s.id === id);
    if (!item) return;

    // If button is "View Receipt" (only Refunds will have this)
    if (text.includes('receipt')) {
      if (item.receipt) {
        openModalHtml(`
          <div style="text-align:center">
            <div class="field">Receipt for ${item.id}</div>
            <img src="${item.receipt}" alt="Receipt ${item.id}" style="max-width:100%;max-height:60vh;border:1px solid #eee;padding:8px;background:#fff" />
          </div>
        `, id);
      } else {
        openModalHtml(`<div style="padding:18px">No receipt uploaded for ${item.id}</div>`, id);
      }
      return;
    }

    // If button is "View Form Request"
    if (text.includes('form')) {
      openModalHtml(`
        <div>
          <div class="field">ID Number</div><div class="value">${item.id}</div>
          <div class="field" style="margin-top:12px">Request Type</div><div class="value">${item.type}</div>
          <div class="field" style="margin-top:12px">Status</div><div class="value">${item.status}</div>
        </div>
        <div>
          <div class="field">Name</div><div class="value">${item.name}</div>
          <div class="field" style="margin-top:12px">Date Requested</div><div class="value">${item.date}</div>
          <div class="field" style="margin-top:12px">Days Processing</div><div class="value">${item.days || '-'}</div>
        </div>
        <div style="grid-column:1/-1;margin-top:8px">
          <div class="field">Notes</div>
          <div style="padding:10px;background:#f6fbff">${item.notes || 'No additional notes'}</div>
        </div>
      `, id);
      return;
    }

    // fallback: treat as view -> decide by type/status
    if (text.includes('view')) {
      if (String(item.type).toLowerCase() === 'refund' && item.status !== 'APPROVED') {
        // show receipt for refund pending
        if (item.receipt) {
          openModalHtml(`
            <div style="text-align:center">
              <div class="field">Receipt for ${item.id}</div>
              <img src="${item.receipt}" alt="Receipt ${item.id}" style="max-width:100%;max-height:60vh;border:1px solid #eee;padding:8px;background:#fff" />
            </div>
          `, id);
        } else {
          openModalHtml(`<div style="padding:18px">No receipt uploaded for ${item.id}</div>`, id);
        }
      } else {
        openModalHtml(`
          <div>
            <div class="field">ID Number</div><div class="value">${item.id}</div>
            <div class="field">Name</div><div class="value">${item.name}</div>
          </div>
        `, id);
      }
    }
  });

  // Approve button in modal: set status to APPROVED, re-render table, close modal
  if (approveBtn) {
    approveBtn.addEventListener('click', () => {
      if (!modalCurrentId) return;
      const idx = window.servicesData.findIndex(s => s.id === modalCurrentId);
      if (idx === -1) return;
      window.servicesData[idx].status = 'APPROVED';
      renderServicesTable();
      closeModal();
    });
  }

  if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
  if (modal) modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });

  // initial render
  renderServicesTable();

  // debug helper
  window.__debugServices = () => {
    console.log('servicesData', window.servicesData);
    console.log('modalCurrentId', modalCurrentId);
    console.log('modal visible', modal && modal.classList.contains('show'));
  };
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Sample data (replace with backend fetch)
  window.trackerData = [
    {
      id:'2023-00123',
      name:'Juan Dela Cruz',
      amount:'₱1,500.00',
      date:'2025-10-10',
      scholarship:{status:'APPROVED', note:'Oct 10, 2025'},
      edp:{status:'PENDING', note:''},
      cashier:{status:'PENDING', note:''},
      finance:{status:'PENDING', note:''},
      days:'23 days'
    },
    {
      id:'2024-00456',
      name:'Maria Santos',
      amount:'₱2,000.00',
      date:'2025-10-11',
      scholarship:{status:'APPROVED', note:'Oct 12, 2025'},
      edp:{status:'APPROVED', note:'Oct 11, 2025'},
      cashier:{status:'PENDING', note:''},
      finance:{status:'PENDING', note:''},
      days:'22 days'
    },
    {
      id:'2024-00789',
      name:'Carlos Reyes',
      amount:'₱500.00',
      date:'2025-10-12',
      scholarship:{status:'APPROVED', note:'Oct 13, 2025'},
      edp:{status:'APPROVED', note:'Oct 12, 2025'},
      cashier:{status:'APPROVED', note:'Oct 14, 2025'},
      finance:{status:'APPROVED', note:'Oct 13, 2025'},
      days:'21 days'
    }
  ];

  const tbody = document.querySelector('#trackerTable tbody');
  const searchInput = document.getElementById('trackerSearch');
  const statusFilter = document.getElementById('trackerFilterStatus');

  function countApproved(item){
    return ['scholarship','edp','cashier','finance']
      .reduce((acc,k)=>acc+(item[k].status==='APPROVED'?1:0),0);
  }

  function renderTracker(){
    tbody.innerHTML='';
    const q=(searchInput.value||'').toLowerCase();
    const filter=statusFilter.value;
    window.trackerData.forEach(item=>{
      if(q && !item.id.toLowerCase().includes(q) && !item.name.toLowerCase().includes(q)) return;
      const approved=countApproved(item);
      const state=approved===4?'fully':approved===0?'none':'partial';
      if(filter && filter!==state) return;
      const tr=document.createElement('tr');
      tr.innerHTML=`
        <td>${item.id}</td>
        <td>${item.name}</td>
        <td>${item.amount}</td>
        <td>${item.date}</td>
        <td>
          <div class="office-status ${item.scholarship.status==='APPROVED'?'approved':'pending'}">${item.scholarship.status}</div>
          ${item.scholarship.note ? `<div class="note">${item.scholarship.note}</div>` : ''}
        </td>
        <td>
          <div class="office-status ${item.edp.status==='APPROVED'?'approved':'pending'}">${item.edp.status}</div>
          ${item.edp.note ? `<div class="note">${item.edp.note}</div>` : ''}
        </td>
        <td>
          <div class="office-status ${item.cashier.status==='APPROVED'?'approved':'pending'}">${item.cashier.status}</div>
          ${item.cashier.note ? `<div class="note">${item.cashier.note}</div>` : ''}
        </td>
        <td>
          <div class="office-status ${item.finance.status==='APPROVED'?'approved':'pending'}">${item.finance.status}</div>
          ${item.finance.note ? `<div class="note">${item.finance.note}</div>` : ''}
        </td>
        <td><span class="count-pill">${approved}/4</span></td>
        <td>${item.days}</td>
      `;
      tbody.appendChild(tr);
    });
  }

  searchInput.addEventListener('input',renderTracker);
  statusFilter.addEventListener('change',renderTracker);
  renderTracker();

  // navigation integration: show/hide tracker card
  const navLinks=document.querySelectorAll('.nav a[data-section]');
  navLinks.forEach(link=>{
    link.addEventListener('click',e=>{
      const key=link.dataset.section;
      const trackerCard=document.getElementById('refundTrackerCard');
      if(trackerCard) trackerCard.style.display=(key==='tracker')?'':'none';
    });
  });
});
</script>



<script>
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('adminMenuToggle');
  const dropdown = document.getElementById('adminDropdown');

  toggle.addEventListener('click', () => {
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  });

  document.addEventListener('click', (e) => {
    if (!toggle.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.style.display = 'none';
    }
  });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const dropdown = document.getElementById('adminDropdown');
  const changePasswordItem = dropdown.querySelector('li:nth-child(2)'); // second item
  const modal = document.getElementById('changePasswordModal');
  const closeBtn = document.getElementById('closeBtn');
  const closeModalBtn = document.getElementById('closeModalBtn');

  // open modal when clicking "Change Password"
  changePasswordItem.addEventListener('click', () => {
    modal.classList.add('show');
    dropdown.style.display = 'none';
  });

  // close modal
  [closeBtn, closeModalBtn].forEach(btn => {
    btn.addEventListener('click', () => {
      modal.classList.remove('show');
    });
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Month Breakdown chart
  const ctxBreakdown = document.getElementById('monthBreakdownChart').getContext('2d');
  const breakdownChart = new Chart(ctxBreakdown, {
    type: 'bar',
    data: {
      labels: ['Approved', 'Declined', 'Completed'],
      datasets: [{
        label: 'Reports',
        data: [45, 12, 30], // sample data
        backgroundColor: ['#16a34a','#ef4444','#0b6b8f']
      }]
    },
    options: {
      responsive:true,
      plugins:{legend:{display:false}}
    }
  });

  // Monthly Trend chart
  const ctxTrend = document.getElementById('monthlyTrendChart').getContext('2d');
  const trendChart = new Chart(ctxTrend, {
    type: 'line',
    data: {
      labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
      datasets: [
        {label:'Approved', data:[5,8,6,9,7,10,8,6,9,7,8,10], borderColor:'#16a34a', fill:false},
        {label:'Declined', data:[2,3,4,2,3,1,2,4,3,2,3,2], borderColor:'#ef4444', fill:false},
        {label:'Completed', data:[4,5,6,7,8,9,10,11,12,10,9,11], borderColor:'#0b6b8f', fill:false}
      ]
    },
    options: {
      responsive:true,
      plugins:{legend:{position:'bottom'}}
    }
  });

  // Navigation integration: show dashboard card
  const navLinks=document.querySelectorAll('.nav a[data-section]');
  navLinks.forEach(link=>{
    link.addEventListener('click',()=>{
      const key=link.dataset.section;
      document.getElementById('dashboardCard').style.display=(key==='dashboard')?'':'none';
    });
  });

  // Generate button (sample refresh)
  document.getElementById('generateBtn').addEventListener('click',()=>{
    alert('Generate new report data here...');
    // update chart data via backend fetch
  });
});
</script>

</body>
</html>
