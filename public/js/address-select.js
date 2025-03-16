$(document).ready(function(){
    async function displayNum() { 
        switch($("select#province").val()){
            case "กรุงเทพมหานคร":
                // document.getElementById('option_district').innerHTML = `<option value="แขวงพระบรมมหาราชวัง" id="">แขวงพระบรมมหาราชวัง</option>`
                // document.getElementById('option_district_2').innerHTML = `<option value="แขวงวังบูรพาภิรมย์" id="">แขวงวังบูรพาภิรมย์</option>`
                // document.getElementById('option_district_3').innerHTML = `<option value="แขวงวัดราชบพิธ" id="">แขวงวัดราชบพิธ</option>`
                // document.getElementById('option_district_4').innerHTML = `<option value="แขวงสำราญราษฎร์" id="">แขวงสำราญราษฎร์</option>`
                // document.getElementById('option_district_5').innerHTML = `<option value="แขวงศาลเจ้าพ่อเสือ" id="">แขวงศาลเจ้าพ่อเสือ</option>`
                // document.getElementById('option_district_6').innerHTML = `<option value="แขวงเสาชิงช้า" id="">แขวงเสาชิงช้า</option>`
                // document.getElementById('option_district_7').innerHTML = `<option value="แขวงดุสิต" id="">แขวงดุสิต</option>`
                // document.getElementById('option_district_8').innerHTML = `<option value="แขวงวชิรพยาบาล" id="">แขวงวชิรพยาบาล</option>`
                // document.getElementById('option_district_9').innerHTML = `<option value="แขวงสวนจิตรลดา" id="">แขวงสวนจิตรลดา</option>`

                document.getElementById('option_district').innerHTML = `<option value="เขตพระนคร" id="">เขตพระนคร</option>`
                document.getElementById('option_district_2').innerHTML = `<option value="เขตดุสิต" id="">เขตดุสิต</option>`
                document.getElementById('option_district_3').innerHTML = `<option value="เขตหนองจอก" id="">เขตหนองจอก</option>`
                document.getElementById('option_district_4').innerHTML = `<option value="เขตบางรัก" id="">เขตบางรัก</option>`
                document.getElementById('option_district_5').innerHTML = `<option value="เขตบางเขน" id="">เขตบางเขน</option>`
                document.getElementById('option_district_6').innerHTML = `<option value="เขตบางกะปิ" id="">เขตบางกะปิ</option>`
                document.getElementById('option_district_7').innerHTML = `<option value="เขตปทุมวัน" id="">เขตปทุมวัน</option>`
                document.getElementById('option_district_8').innerHTML = `<option value="เขตป้อมปราบศัตรูพ่าย" id="">เขตป้อมปราบศัตรูพ่าย</option>`
                document.getElementById('option_district_9').innerHTML = `<option value="เขตพระโขนง" id="">เขตพระโขนง</option>`
            break;
            case "กระบี่":
                document.getElementById('option_district').innerHTML = `<option value="อำเภอเมืองกระบี่" id="">อำเภอเมืองกระบี่</option>`
                document.getElementById('option_district_2').innerHTML = `<option value="อำเภอเขาพนม" id="">อำเภอเขาพนม</option>`
                document.getElementById('option_district_3').innerHTML = `<option value="อำเภอเกาะลันตา" id="">อำเภอเกาะลันตา</option>`
                document.getElementById('option_district_4').innerHTML = `<option value="อำเภอคลองท่อม" id="">อำเภอคลองท่อม</option>`
                document.getElementById('option_district_5').innerHTML = `<option value="อำเภอปลายพระยา" id="">อำเภอปลายพระยา</option>`
                document.getElementById('option_district_6').innerHTML = `<option value="อำเภอลำทับ" id="">อำเภอลำทับ</option>`
                document.getElementById('option_district_7').innerHTML = `<option value="อำเภอเหนือคลอง" id="">อำเภอเหนือคลอง</option>`
                break;
            default:
                document.getElementById('defualt_district').innerHTML = `<option value="" id="">กรุณาเลือกจังหวัดก่อน</option>`
                document.getElementById('option_district_2').innerHTML = `<option value="" id=""></option>`
                document.getElementById('option_district_3').innerHTML = `<option value="" id=""></option>`
                document.getElementById('option_district_4').innerHTML = `<option value="" id=""></option>`
                document.getElementById('option_district_5').innerHTML = `<option value="" id=""></option>`
                document.getElementById('option_district_6').innerHTML = `<option value="" id=""></option>`
                break;
        }
    } 
    // When the selected value will change, 
    // the above function is called 
    $("select#province").change(displayNum); 
});