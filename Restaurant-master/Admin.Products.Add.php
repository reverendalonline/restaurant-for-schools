<?php
$page = 'Products';
include 'incl/head.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add New Product</h4>
                    </div>
                    <div class="content">
                        <?php include 'scr/add.Product.php'; ?>
                        <form method="post" action="Admin.Products.Add.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control border-input" required placeholder="Pizza Mushroom"name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control border-input" required placeholder="A set of mushroom on the pizza"name="desc">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control border-input" placeholder="75.5" required name="price">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Day</label>
                                        <select class="form-control border-input" name="day" required >
                                            <option value="Mon">Monday</option>
                                            <option value="Tue">Tuesday</option>
                                            <option value="Wed">Wednesday</option>
                                            <option value="Thu">Thursday</option>
                                            <option value="Fri">Friday</option>
                                            <option value="Sat">Saturday</option>
                                            <option value="Sun">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Period</label>
                                        <select class="form-control border-input" name="period" required >
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Previous</label>
                                        <input type="file" class="form-control border-input" required name="pic">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>quantity</label>
                                        <input type="number" min="0" class="form-control border-input" required placeholder="12" name="qty">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd" name="addpdct">Add</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'incl/foot.php'; ?>
