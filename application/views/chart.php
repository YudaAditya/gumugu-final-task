<?php $this->load->view("_layouts/_header.php"); ?>

<body>

    <?php $this->load->view("_layouts/_navbar.php"); ?>
    <section id="chart" class="section">
        <div class="container pt-5">
            <div class="container-fluid text-center">
                <h3 class="display-4"><u>Ringkasan</u></h3>
            </div>
            <div class="row pt-5">
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Views</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all('goto'); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="img-icon bg-red">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Clicked</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all('search'); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="img-icon bg-green">
                                        <i class="fas fa-mouse"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Downloads</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all('download'); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="img-icon bg-blue">
                                        <i class="fas fa-file-download"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
            <!-- chart  -->

            <div class="row py-5">
                <div class="col-xl-12">
                    <div class="card bg-default">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center pt-3">
                                <div class="col">
                                    <h3 class="mb-0 text-center">Keyword terbanyak di cari</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                
                                <!-- Chart wrapper -->
                                <canvas id="searchChart"></canvas>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-xl-12">
                    <div class="card bg-default">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center pt-3">
                                <div class="col">
                                    <h3 class="mb-0 text-center">Link yang banyak diakses</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                
                                <!-- Chart wrapper -->
                                <canvas id="gotoChart"></canvas>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <?php $this->load->view("_layouts/_footer.php"); ?>
