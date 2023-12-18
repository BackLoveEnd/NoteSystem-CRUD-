<?php
require_once KERNEL_DIR . 'Database/database.php';
function deleteNote($id)
{
    $pdo = connect();
    try{
        set_query($pdo, "DELETE FROM note_preview WHERE id = :id", [':id' => $id]);
        return true;
    } catch (PDOException $e){
        die("Delete operation failed: " . $e->getMessage());
    }
}

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if($id){
    deleteNote($id);
    sleep(0.5);
    header("Location: /");
}