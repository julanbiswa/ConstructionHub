<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConstructionHub Admin Panel</title>
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    <div class="layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">🏗️ ConstructionHub</div>
            <nav>
                <ul>
                    <li class="active" onclick="showTab('dashboard')">Dashboard</li>
                    <li onclick="showTab('machinery')">Machinery</li>
                    <li onclick="showTab('reviews')">Reviews</li>
                    <li onclick="showTab('payments')">Payments</li>
                    <li onclick="showTab('vlogs')">Vlogs</li>
                    <li onclick="showTab('reports')">Reports</li>
                </ul>
            </nav>
        </aside>

        <!-- Main -->
        <main class="main">
            <header class="header">
                <input type="text" placeholder="Search..." class="search" />
                <div class="user-actions">
                    <button class="btn-generate">Generate Report</button>
                    <div class="user-info">👤 Admin</div>
                </div>
            </header>

            <!-- Dashboard Tab -->
            <section id="dashboard" class="tab active">
                <h1>Dashboard</h1>
                <div class="cards">
                    <div class="card">
                        <h3>Earnings (Monthly)</h3>
                        <p>₹40,000</p>
                    </div>
                    <div class="card">
                        <h3>Earnings (Annual)</h3>
                        <p>₹215,000</p>
                    </div>
                    <div class="card">
                        <h3>Tasks</h3>
                        <p>50%</p>
                    </div>
                    <div class="card">
                        <h3>Pending Requests</h3>
                        <p>18</p>
                    </div>
                </div>
                <div class="charts">
                    <div class="chart">[Earnings Overview Chart]</div>
                    <div class="chart">[Revenue Sources Chart]</div>
                </div>
            </section>

            <section id="machinery" class="tab">
                <h1>Machinery and Equipment Management</h1>

                <!-- Add Button -->
                <div style="text-align: right; margin-bottom: 20px;">
                    <button onclick="showAddMachineryModal()" class="btn-generate">+ Add Machinery</button>
                </div>

                <?php include('admin-machinery.php'); ?>
            </section>


            <section id="reviews" class="tab">Reviews Management Coming Soon</section>
            <section id="payments" class="tab">Payments Page Coming Soon</section>
            <section id="vlogs" class="tab">
                <h1>Vlogs Management</h1>
                <form id="vlogForm" class="machinery-form">
                    <input type="text" placeholder="Vlog Title" id="vlogTitle" required />
                    <input type="url" placeholder="YouTube Video URL" id="vlogUrl" required />
                    <button type="submit">Add Vlog</button>
                </form>
                <div id="vlogList" class="machinery-list"></div>
            </section>

            <section id="reports" class="tab">
                <h1>Upload Reports</h1>
                <form id="reportForm" class="machinery-form" enctype="multipart/form-data">
                    <input type="text" id="reportTitle" placeholder="Report Title" required />
                    <input type="file" id="reportFile" accept=".pdf,.doc,.docx" required />
                    <button type="submit">Upload Report</button>
                </form>
                <div id="reportList" class="machinery-list"></div>
            </section>


        </main>
    </div>

    <script>
        function showTab(id) {
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.getElementById(id).classList.add('active');

            document.querySelectorAll('aside nav ul li').forEach(li => li.classList.remove('active'));
            event.target.classList.add('active');
        }

        function showAddMachineryModal() {
            document.getElementById("machinery-modal").classList.remove("hidden");
        }

        function closeMachineryModal() {
            document.getElementById("machinery-modal").classList.add("hidden");
        }

        // Open correct tab on redirect with ?tab=machinery
        window.addEventListener("DOMContentLoaded", () => {
            const tabParam = new URLSearchParams(window.location.search).get("tab");
            if (tabParam) showTab(tabParam);
        });

        // ESC key closes modal
        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                closeMachineryModal();
            }
        });
    </script>

</body>

</html>