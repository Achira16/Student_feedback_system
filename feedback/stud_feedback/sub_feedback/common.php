<div class="wrapper">
<div class="container">
<div clas="row">
<div class="card-panel">
<span>

        <form method="post" action="feed_sub.php" id="abc">
            <div class="row">
            <div class="col s6">
            <select name="sub" id="sub">
            <option value="" disabled selected>Choose subject</option>
            <?php while($row = $res->fetch_row()):
            ?>
            <option value="<?php echo $row[0];?>"><?php echo $row[0]."( ".$row[1].")";?></option>
            <?php endwhile;?>
            </select>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="" id="inst_name" name="inst_name" type="text" class="validate">
            <label for="inst_name">Instructor Name</label>
            </div>
            </div>
            <div class="row">
            <div class="col s6">
                <button class="btn waves-effect waves-light" type="submit" name="submit" style="background:#4169E1;">SUBMIT
                  <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
 
 </span>       
</div>
</div>
<footer class="page-footer" style="background:#191970;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"></h5>
                <br><br><br>
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="text-align:center;background:#4169E1;">
            <div class="container">
            Copyright © 2020 Achira Raychaudhuri
            </div>
          </div>
</footer>
</div>
</div>


