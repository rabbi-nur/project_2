<?php include 'header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Odd Even Series </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="choice" value="1"> Odd </label>
                                        <label><input type="radio" name="choice" value="2"> Even </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"><?php echo isset($result) ? $result : '' ;?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="odd_even_btn" value="Submit" class="btn btn-success"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>