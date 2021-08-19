    <?php 
$arr = [4,2,5,56,89,12,600,3,67,34,2,4,12,89];
// Ham sắp xếp
function TangDan($arr)
{
    // Sắp xếp mảng
    for ($i = 0; $i < (count($arr) - 1); $i++)
    {
        for ($j = $i + 1; $j < count($arr); $j++)
        {
            if ($arr[$j] < $arr[$i])
            {
                // hoán vị
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }
    return $arr;
}
echo "Tang dan: ";
$k= TangDan($arr);
echo json_encode($k);
echo "\n\r";
     

function GiamDan($arr)
{
    // Sắp xếp mảng
    for ($i = 0; $i < (count($arr) - 1); $i++)
    {
        for ($j = $i+1; $j < count($arr); $j++)
        {
            if ($arr[$i] < $arr[$j])
            {
                // hoán vị
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }
    return $arr;
}
echo "Giam dan: ";
$k= GiamDan($arr);
echo json_encode($k);

function DaoMang($arr)
{
    $temp=[];
    // Sắp xếp mảng
    for ($i = count($arr)-1; $i >= 0; $i--)
    {
       $temp[]=$arr[$i];
    }
    return $temp;
}
echo "\n\r";
echo "Dao mang: ";
$k= DaoMang($arr);
echo json_encode($k);
