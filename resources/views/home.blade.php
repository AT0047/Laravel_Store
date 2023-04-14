@extends('layouts.app')

@section('content')

        <!-- ---------main section------------- -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales</h3>
                            <h1>$25.024</h1>
                        </div>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$14.500</h1>
                        </div>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>62%</p>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$10.864</h1>
                        </div>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>44%</p>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

            </div>
             <!-- ---------main table------------- -->
        <div class="recent-orders">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Number</th>
                        <th>Pyment</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Processor</td>
                        <td class="tdfnt">2501200</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td class="tdfnt">2501200</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td class="tdfnt">2501200</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td class="tdfnt">2501200</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td class="tdfnt">2501200</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                </tbody>
            </table>
            <a href="#">Show ALL</a>
        </div>
        </main>
@endsection