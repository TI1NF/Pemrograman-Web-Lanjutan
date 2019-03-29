<?php
use yii\helpers\Html;
?>

<h1>Daftar Employee</h1>

<?php
echo Html::a('Create',['create'],['class' => 'btn btn-primary', 'style' => 'margin-bottom:5px;']);
echo '<table class="table table-bordered table-striped">';
echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Age</th>';
    echo '<th>Action</th>';
echo '</tr>';
foreach($employees as $employee)
{
    echo '<tr>';
        echo '<td>'.$employee->id.'</td>';
        echo '<td>'.$employee->name.'</td>';
        echo '<td>'.$employee->age.'</td>';
        echo '<td>';
            echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',[
                'employee/update', 
                'id' => $employee->id]
            );
            echo Html::a('<i class="glyphicon glyphicon-trash"></i>',[
                'employee/delete', 
                'id' => $employee->id],[
                'onclick' => 'return(confirm("Apakah data mau dihapus ?") ? true : false);',
                'style' => 'margin-left:10px;']);
        echo '</td>';
    echo '</tr>';
}
echo '</table>';