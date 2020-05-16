
<?php 
    include('db.php');

    $column = array('GroupName', 'View', 'Edit', 'Delete', 'Visit Info');
    $output = array();
    $query = "SELECT * FROM tab_organizers ";
    
    if(isset($_POST["search"]["value"]))
    {
        $query .= 'WHERE GroupName LIKE "%'.$_POST["search"]["value"].'%" ';
        $query .= 'OR City LIKE "%'.$_POST["search"]["value"].'%" ';
    }

    if(isset($_POST["order"]))
    {
     $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
    }
    else
    {
     $query .= 'ORDER BY GroupName ';
    }

    $query1 = '';

    if($_POST["length"] != -1)
    {
        $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    }

    $statement = $connection->prepare($query);

    $statement->execute();

    $number_filter_row = $statement->rowCount();

    $statement = $connection->prepare($query . $query1);

    $statement->execute();

    $result = $statement->fetchAll();
    
    $data = array();
    
    foreach($result as $row)
    {
        $sub_array = array();
        $sub_array[] = $row['GroupName'];
        $sub_array[] = '<input type="button" name="view" value="View" id="'.$row["OrganizerID"].'" class="btn btn-info view_data" />';
        $sub_array[] = '<input type="button" name="Edit" value="Edit" id="'.$row["OrganizerID"].'" class="btn btn-success edit_data" />';
        $sub_array[] = '<button type="button" data-toggle="modal" data-target="#deletemodal" name="delete" id="'.$row["OrganizerID"].'" class="btn btn-danger delete">Delete</button>';
        $sub_array[] = '<input type="button" data-toggle="modal" data-target="#visitinfomodal" name="visitinfo" value="Visit Info" id="'.$row["OrganizerID"].'" class="btn btn-primary visitorinfo_data" />';
        $data[] = $sub_array;
    }

    function count_all_data($connection)
    {
        $query = "SELECT * FROM tab_organizers";
        $statement = $connection->prepare($query);
        $statement->execute();
        return $statement->rowCount();
    }

    $output = array(
        "draw"    => intval($_POST["draw"]),
        "recordsTotal"  =>  count_all_data($connection),
        "recordsFiltered" => $number_filter_row,
        "data"    => $data
    );
    echo json_encode($output);
?>