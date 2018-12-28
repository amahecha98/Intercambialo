<div class="row">
<?php 
require '../class/view.php';
foreach ($rows as $row) {
    echo
        '

    <div class="col-sm-12 col-xl-4">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="../img/users/'.$row['photo'].'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['email'] . '</h5>
                            <p class="card-text">' . $row['emailsecond'] . '</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">' . $row['photo'] . '</small>
                    </div>
            </div>
        </div>
    </div>

';
}
?>
</div>