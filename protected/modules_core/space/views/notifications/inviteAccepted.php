<?php $this->beginContent('application.modules_core.notification.views.notificationLayout', array('notification' => $notification)); ?>
<?php echo Yii::t('SpaceModule.notification', '{userName} accepted your invite to {spaceName}', array('{userName}' => '<strong>' . $creator->displayName . '</strong>', '{spaceName}' => '<strong>' . $targetObject->name . '</strong>')); ?> 
<?php $this->endContent(); ?>