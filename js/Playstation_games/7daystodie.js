document.getElementById("open-button").addEventListener("click", openForm);
function openForm(){
    <?php echo $num; ?> 
}

document.getElementById("button2").addEventListener("click", closeForm);
function closeForm(){
    <?php echo $num++; ?>
}


