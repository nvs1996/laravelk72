<?php
function GetCategory($mang,$parent,$shift,$active)
{
	foreach($mang as $row)
	{
		if($row->parent==$parent)
		{
            if($row->id==$active)
            {
                echo "<option selected value='$row->id'>".$shift.$row->name.'</option>';
            }
            else
            {
                echo "<option value='$row->id'>".$shift.$row->name.'</option>';
            }
			GetCategory($mang,$row->id,$shift.'---|',$active);
		}
	}
}


function ShowCategory($mang,$parent,$shift)
{
	foreach($mang as $row)
	{
		if($row->parent==$parent)
		{
            
            echo"
                <div class='item-menu'><span>".$shift.$row->name."</span>
                <div class='category-fix'>
                <a class='btn-category btn-primary' href='admin/category/edit/".$row->id."'><i class='fa fa-edit'></i></a>
                <a onclick='return del_cate()' class='btn-category btn-danger' href='admin/category/del/".$row->id."'><i class='fas fa-times'></i></a>
                </div>
                </div>";
			ShowCategory($mang,$row->id,$shift.'---|');
		}
	}
}

//input $product ->model
function attr_value($product)
{
    foreach($product->values as $value)
    {
        $key=$value->attribute->name;
        $result[$key][]= $value->value;
    }
    return $result;
}

//input: array('size'=>array(1,2),'color'=>array(4))   output: array(array(1,4),array(2,4));

function get_combinations($arrays) {
	$result = array(array());
	foreach ($arrays as $property => $property_values) {
		$tmp = array();
		foreach ($result as $result_item) {
			foreach ($property_values as $property_value) {
				$tmp[] = array_merge($result_item, array($property => $property_value));
			}
		}
		$result = $tmp;
	}
	return $result;
}

//kiểm tra check input edit product 
function check_value($product,$value_check)
{
	
	foreach ($product->values as $value) {
		if($value->id==$value_check)
		{
			return true;
		}
	}
	return false;

}


//check ariant
// kiểm tra biến thể
function check_var($product,$array)
{
	foreach($product->variant as $row)
	{
		$mang=array();
		foreach ($row->values as $value) {
			$mang[]=$value->id;
		}
		if(array_diff($mang,$array)==NULL)
		{
			return false;
		}
	}
	return true;
}

//input 1 san pham xac dinh và 1 array chứa giá trị thuộc tính ,out: giá theo thuộc tính
function getprice($product,$array)
{
    foreach($product->variant as $row)
    {
            $mang=array();
            foreach($row->values as $value)
            {
                $mang[]=$value->value;
            }
            if(array_diff($mang,$array)==NULL)
            {
                if($row->price==0)
                {
                    return $product->price;
                }
                return $row->price;
            }
    }
    return $product->price;
}