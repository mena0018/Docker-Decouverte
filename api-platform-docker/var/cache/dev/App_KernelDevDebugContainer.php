<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5W2HcpY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5W2HcpY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5W2HcpY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5W2HcpY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5W2HcpY\App_KernelDevDebugContainer([
    'container.build_hash' => '5W2HcpY',
    'container.build_id' => 'b5d303fc',
    'container.build_time' => 1666599379,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5W2HcpY');
