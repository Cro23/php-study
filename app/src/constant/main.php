<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';
$task = new Task();
$task->setPriority(Task::PRIORITY_HIGH);
echo '優先度：' . $task->getPriorityAsString();