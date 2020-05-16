
<?php 
    include('../db.php');
    include('function.php');

    $column = array('GroupName', 'View', 'Edit', 'Delete');
    $output = array();
    // $selectedOrganizerID = $_SESSION["OrganizerID"];
    $query = "SELECT * FROM tab_visitorgroups WHERE OrganizerID = '".$_POST["OrganizerID"]."' ";
    
    // if(isset($_POST["search"]["value"]))
    // {
        // $query .= 'WHERE GroupName LIKE "%'.$_POST["search"]["value"].'%" ';
    // }

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
        $sub_array[] = '<input type="button" name="view" value="View" id="'.$row["GroupID"].'" class="btn btn-info view_data" />';
        $sub_array[] = '<input type="button" name="Edit" value="Edit" id="'.$row["GroupID"].'" class="btn btn-success edit_data" />';
        $sub_array[] = '<button type="button" data-toggle="modal" data-target="#deletemodal" name="delete" id="'.$row["GroupID"].'" class="btn btn-danger delete">Delete</button>';
        $data[] = $sub_array;
    }

    function count_all_data($connection)
    {
        $query = "SELECT * FROM tab_visitorgroups WHERE OrganizerID = '".$_POST["OrganizerID"]."' ";
        $statement = $connection->prepare($query);
        $statement->execute();
        return $statement->rowCount();
    }
    // echo print_r($_POST["OrganizerID"]);

    $output = array(
        "draw"    => intval($_POST["draw"]),
        "recordsTotal"  =>  count_all_data($connection),
        "recordsFiltered" => $number_filter_row,
        "data"    => $data
    );
    echo json_encode($output);
?>