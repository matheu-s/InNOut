<?php

if ($exception) {

    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}

if ($exceptionValidation) {

    $message = [
        'type' => 'error',
        'message' => $exceptionValidation->getMessage()
    ];
}

?>



<?php if($message): ?>
    <div class="my-3 alert alert-<?=$message['type'] === 'error' ? 'danger' : 'success' ?> " role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif ?>