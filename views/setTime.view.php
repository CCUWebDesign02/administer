<p><br /></p>
<div class="container" id="body">
    <h1 class="text-center">上傳新電影</h1>
    <hr/>
    <form  method="post" action="setTimeMovie.php" enctype="multipart/form-data">
        <label for="theater">聽次:</label>
        <select class="form-control" name='theater'>
        <?php
            require_once(__DIR__ . '/../autoload.php');
            use \Data \TimeTable;
            $TimeTable = new TimeTable();
            $theater=$TimeTable->getTheater();
            $date=$TimeTable->getDate();
            foreach($theater as $row)
            echo "<option>".$row[0]."</option>";
            echo "</select><label for=\"date\">日期:</label><select class=\"form-control\" name='date'>";
            foreach($date as $row)
            echo "<option>".$row."</option>";
            echo "</select>";
        ?>
        <div class="selectbtn">
            <input type="submit" class="btn btn-default" value="送出" />
        </div>
    </form>
</div>

