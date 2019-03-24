<?php
/**
 * 404 Template
 * @var BodyMassInfoTable $this
 */
declare(strict_types = 1);

namespace Attogram\Body;

header('HTTP/1.0 404 Not Found');
$this->includeTemplate('header');
?>
<h1 class="alert alert-danger m-0 p-4">
    404 Not Found
</h1>
<?php
$this->includeTemplate('footer');
