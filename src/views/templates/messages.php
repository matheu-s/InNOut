<?php

if ($exception) {

    $message = [
        'type' => 'Error',
        'message' => $exception->getMessage()
    ];
}

?>

<?php if($message): ?>
    <div class="my-3 alert alert-danger" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif ?>