<?php
require 'retrive.php';
?>
<div class="container-fluid row pt-3">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <h5 class="card-title text-primary text-center mt-3">Test-1</h5>
              <div class="card-body">
                <p class="mb-1 fw-bold text-info" style="font-size: .77rem;">FSD-1 (<?php echo $t1fsd?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo intval($t1fsd/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-success" style="font-size: .77rem;">Python (<?php echo $t1py?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo intval($t1py/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-warning" style="font-size: .77rem;">DE (<?php echo $t1de?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo intval($t1de/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-danger" style="font-size: .77rem;">Maths (<?php echo $t1maths?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo intval($t1maths/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-primary" style="font-size: .77rem;">ETC (<?php echo $t1etc?>/25)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo intval($t1etc/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold" style="font-size: .77rem;">TOTAL (<?php echo $t1fsd+$t1py+$t1de+$t1maths+$t1etc?>/125)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: <?php echo intval($t1fsd+$t1py+$t1de+$t1maths+$t1etc/125 * 100)."%" ?>">
                  </div>
                </div>
              </div>
            </div>
</div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <h5 class="card-title text-primary text-center mt-3">Test-2</h5>
              <div class="card-body">
                <p class="mb-1 fw-bold text-info" style="font-size: .77rem;">FSD-1 (<?php echo $t2fsd?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo intval($t2fsd/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-success" style="font-size: .77rem;">Python (<?php echo $t2py?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar  bg-success" role="progressbar" style="width: <?php echo intval($t2py/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-warning" style="font-size: .77rem;">DE (<?php echo $t2de?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo intval($t2de/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-danger" style="font-size: .77rem;">Maths (<?php echo $t2maths?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo intval($t2maths/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-primary" style="font-size: .77rem;">ETC (<?php echo $t2etc?>/25)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo intval($t2etc/25 * 100)."%" ?>">
                  </div>
                </div>
                <p class="mt-4 mb-1 fw-bold" style="font-size: .77rem;">TOTAL (<?php echo $t2fsd+$t2py+$t2de+$t2maths+$t2etc?>/125)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: <?php echo intval($t2fsd+$t2py+$t2de+$t2maths+$t2etc/125 * 100)."%" ?>">
                  </div>
              </div>
            </div>
</div></div>
</div>
<div class="container-fluid row py-3">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <h5 class="card-title text-primary text-center mt-3">Test-3</h5>
              <div class="card-body">
                <p class="mb-1 fw-bold text-info" style="font-size: .77rem;">FSD-1 (<?php echo $t3fsd?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo intval($t3fsd/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-success" style="font-size: .77rem;">Python (<?php echo $t3py?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo intval($t3py/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-warning" style="font-size: .77rem;">DE (<?php echo $t3de?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo intval($t3de/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-danger" style="font-size: .77rem;">Maths (<?php echo $t3maths?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo intval($t3maths/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-primary" style="font-size: .77rem;">ETC (<?php echo $t3etc?>/25)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo intval($t3etc/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold" style="font-size: .77rem;">TOTAL (<?php echo $t3fsd+$t3py+$t3de+$t3maths+$t3etc?>/125)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: <?php echo intval($t3fsd+$t3py+$t3de+$t3maths+$t3etc/125 * 100)."%" ?>">
                  </div>
              </div>
            </div>
</div></div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0 ">
              <h5 class="card-title text-primary text-center mt-3">Test-4</h5>
              <div class="card-body">
                <p class="mb-1 fw-bold text-info" style="font-size: .77rem;">FSD-1 (<?php echo $t4fsd?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo intval($t4fsd/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-success" style="font-size: .77rem;">Python (<?php echo $t4py?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo intval($t4py/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-warning" style="font-size: .77rem;">DE (<?php echo $t4de?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo intval($t4de/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-danger" style="font-size: .77rem;">Maths (<?php echo $t4maths?>/25)</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo intval($t4maths/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold text-primary" style="font-size: .77rem;">ETC (<?php echo $t4etc?>/25)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo intval($t4etc/25 * 100)."%" ?>"
                    ></div>
                </div>
                <p class="mt-4 mb-1 fw-bold" style="font-size: .77rem;">TOTAL (<?php echo $t4fsd+$t4py+$t4de+$t4maths+$t4etc?>/125)</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: <?php echo intval($t4fsd+$t4py+$t4de+$t4maths+$t4etc/125 * 100)."%" ?>">
                  </div>
                </div>
            </div>
</div>
</div>
</div>

<div class="container-fluid row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-title text-center mt-1">Subject wise Marks</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                <p class="mb-1 fw-bold text-info">FSD-1 (<?php echo $t1fsd+$t2fsd+$t3fsd+$t4fsd?>/125)&nbsp;&nbsp;
                </p>
                <p class="mb-1 fw-bold text-success">Python (<?php echo $t1py+$t2py+$t3py+$t4py?>/125)&nbsp;&nbsp;
                </p>
                <p class="mb-1 fw-bold text-warning">DE (<?php echo $t1de+$t2de+$t3de+$t4de?>/125)&nbsp;&nbsp;
                </p>
                <p class="mb-1 fw-bold text-danger">Maths (<?php echo $t1maths+$t2maths+$t3maths+$t4maths?>/125)&nbsp;&nbsp;
                </p>
                  </div>
                  <div class="col-md-1">
                    <img src="./images/info.png" alt="" height="25px" width="25px">
                    <img src="./images/success.png" alt="" height="25px" width="25px">
                    <img src="./images/warning.png" alt="" height="25px" width="25px">
                    <img src="./images/danger.png" alt="" height="25px" width="25px">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-10">
            <div class="card">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col">
                  <div class="progress rounded mx-4 mt-4" style="height: 10px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo intval($t1fsd+$t2fsd+$t3fsd+$t4fsd)."%" ?>">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <div class="progress rounded mx-4 mt-3" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo intval($t1py+$t2py+$t3py+$t4py)."%" ?>">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <div class="progress rounded mx-4 mt-3" style="height: 10px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo intval($t1de+$t2de+$t3de+$t4de)."%" ?>">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <div class="progress rounded mx-4 mt-3 mb-4" style="height: 10px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo intval($t1maths+$t2maths+$t3maths+$t4maths)."%" ?>">
                    </div>
                  </div>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>