<?php /** @var EvolutionCMS\Models\SiteTmplvar $item */ ?>
<li>
    <label>
        <?php echo $__env->make('manager::form.inputElement', [
            'type' => 'checkbox',
            'name' => 'assignedTv[]',
            'checked' => is_array($tvSelected) && in_array($item->getKey(), $tvSelected, true),
            'value' => $item->getKey(),
            'attributes' => 'onchange="documentDirty=true; document.getElementById(\'tvsDirty\').value = 1;"'
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo e($item->name); ?>

        <small>(<?php echo e($item->getKey()); ?>)</small>
        - <?php echo $item->caption; ?>

    </label>
    <?php if(!empty($item->locked)): ?>
        <em>(<?php echo e(ManagerTheme::getLexicon('locked')); ?>)</em>
    <?php endif; ?>
    <?php if(!empty($item->isAlreadyEdit)): ?>
        <?php $rowLock = $item->alreadyEditInfo; ?>
        <span title="<?php echo e(str_replace(['[+lasthit_df+]', '[+element_type+]'], [$rowLock['lasthit_df'], ManagerTheme::getLexicon('lock_element_type_2')], ManagerTheme::getLexicon('lock_element_editing'))); ?>" class="editResource" style="cursor:context-menu;">
            <i class="<?php echo e($_style['icon_eye']); ?>"></i>
        </span>
    <?php else: ?>
        <a href="<?php echo e($item->makeUrl('actions.edit')); ?>&or=<?php echo e($action ?? 0); ?>&oid=<?php echo e($item->getKey()); ?>">
            <i class="<?php echo e($_style['icon_edit']); ?>"></i> <?php echo e(ManagerTheme::getLexicon('edit')); ?>

        </a>
    <?php endif; ?>
</li>
<?php /**PATH /var/www/html/manager//views//page/template/tv.blade.php ENDPATH**/ ?>