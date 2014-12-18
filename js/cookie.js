<script>
var expire_date = new Date();
expire_date.setTime(expire_date.getTime() + 365 * 24 * 3600 * 1000);
document.cookie = "stat_recent_view=" + '<?php echo json_encode($recent_view);?>' + ";path=/;expires=" + expire_date.toGMTString();
</script>

