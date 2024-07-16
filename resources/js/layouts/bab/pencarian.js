$("#golekki").autocomplete({
    source: "<?php echo json_encode($listJudhul->toArray()); ?>",
});
