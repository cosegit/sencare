<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container34rbLkk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container34rbLkk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container34rbLkk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container34rbLkk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container34rbLkk\App_KernelDevDebugContainer([
    'container.build_hash' => '34rbLkk',
    'container.build_id' => '7a769706',
    'container.build_time' => 1716656803,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container34rbLkk');
