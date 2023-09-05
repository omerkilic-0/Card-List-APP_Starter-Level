<!-- https://www.amazon.com.tr/s?k=ayakkab%C4%B1&crid=AOWE8Y5BD1WO&sprefix=ayakka%2Caps%2C139&ref=nb_sb_ss_ts-doa-p_1_6 -->
<?php include 'partials/header.php'; ?>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="font-size: large;">URL</label>
                <input type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="url" autofocus required>
                <br>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                <input type="submit" value="Azalan" name="azalan" class="btn btn-primary">
                <input type="submit" value="Artan" name="artan" class="btn btn-primary">
            </div>
        </form>
        <?php include_once '../controller/resultController.php'; ?>
        <?php include_once '../controller/azalanController.php'; ?>
        <?php include_once '../controller/artanController.php'; ?>
    </div>
</body>

<?php include 'partials/footer.php'; ?>