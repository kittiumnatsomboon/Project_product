$(document).ready(function(){
    async function displayNum() { 
        switch($("select#province").val()){
            case "กรุงเทพมหานคร":
                document.getElementById('option_district').innerHTML = `<option value="แขวงพระบรมมหาราชวัง" id="">แขวงพระบรมมหาราชวัง</option>`
                document.getElementById('option_district_2').innerHTML = `<option value="แขวงวังบูรพาภิรมย์" id="">แขวงวังบูรพาภิรมย์</option>`
                document.getElementById('option_district_3').innerHTML = `<option value="แขวงวัดราชบพิธ" id="">แขวงวัดราชบพิธ</option>`
                document.getElementById('option_district_4').innerHTML = `<option value="แขวงสำราญราษฎร์" id="">แขวงสำราญราษฎร์</option>`
                document.getElementById('option_district_5').innerHTML = `<option value="แขวงศาลเจ้าพ่อเสือ" id="">แขวงศาลเจ้าพ่อเสือ</option>`
                document.getElementById('option_district_6').innerHTML = `<option value="แขวงเสาชิงช้า" id="">แขวงเสาชิงช้า</option>`
            break;
            case "กระบี่":
                document.getElementById('option_district').innerHTML = `<option value="อำเภอ..." id="">อำเภอ...</option>`
                break;
            default:
                document.getElementById('defualt_district').innerHTML = `<option value="" id="">กรุณาเลือกจังหวัดก่อน</option>`
                break;
        }
    } 
    // When the selected value will change, 
    // the above function is called 
    $("select#province").change(displayNum); 
});