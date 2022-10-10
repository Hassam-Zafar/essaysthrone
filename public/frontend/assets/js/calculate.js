let api_price_plan_resource = "https://staging.katibeen.com/api/price-plan?domain_id=2";
//  crm_api + "price-plan?domain_id=" + domain_id;


setTimeout(function(){
    fetch(api_price_plan_resource)
    .then((response) => response.json())
    .then((data) => {
   
        let { addons, levels, subjects, type_of_works, urgencies } = data.data;
        makeOptions("#levels", levels);
        makeOptions("#subjects", subjects);
        makeOptions("#type_of_works", type_of_works);
        makeOptions("#urgencies", urgencies);
        // makeCheckbox("#addons", addons);
    });
},2000)

function makeOptions(fieldName, fieldData) {
    var $select = $(fieldName);
    $select.find("option").remove();
    $.each(fieldData, function (key, value) {
        $select.append("<option value=" + key + ">" + value + "</option>");
    });
}
function makeCheckbox(fieldName, fieldData) {
    var $checkbox = $(fieldName);
    $.each(fieldData, function (key, value) {
        let { id, name, amount } = value;
        $checkbox.append(`
            <li class="w-100 text-left">
            <input type="checkbox" id="service-${id}" name="addOns[]" value="${id}" data-amount="${amount}" />
            <label for="service-${id}">
            <i>${name}</i>
            <span class="step-price">Add for $${amount}</span>
            </label>
            </li>
            `);
    });
}

function calculatePrice() {
    // console.log("test <<< function");
    let url = "https://staging.katibeen.com/api/orders/calculate";
    let data = $("#calculatePrice").serialize();
    let check_spacing = data.split("&");
   
   console.log(data);

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            console.log(response);
            let {
                addons_amount,
                grand_total_amount,
                service_amount,
                actual_service_amount,
                addOns,
                total_amount,
                basic_details,
                discounted_amount,
            } = response;
            // $("#basic_details").text(basic_details);
            $("#cal-words").text(response.words);
            $("#total_amount").text(total_amount.toFixed(2));
            $("#grand_total_amount").text(grand_total_amount.toFixed(2));
            $("input[name='total_amount']").val(total_amount);
            $("input[name='grand_total_amount']").val(grand_total_amount);
            $("input[name='addons_amount']").val(addons_amount);
            $("#service_cost").text(actual_service_amount);
            $("#discount_cost").text(discounted_amount);
            $("input[name='discount_amount']").val(discounted_amount);
            $("#addon_cost").text(addons_amount);
            $("input[name='service_amount']").val(service_amount);
            // $("input[name='order_addons[]']").val(addOns);

            if(response.line_spacing == 1){
                $("#line_spacing").text("Double line spacing");
            }else if(response.line_spacing == 2){
                $("#line_spacing").text("SIngle line spacing");
            }else if(response.line_spacing == 3){
                $("#line_spacing").text("1.5 line spacing");
            }else{
                $("#line_spacing").text("");
            }

            if(response.price_plan_urgency_id == 1){
                $("#deadline").text("30 Days");
            }else if(response.price_plan_urgency_id == 2){
                $("#deadline").text("20 Days");
            }else if(response.price_plan_urgency_id == 3){
                $("#deadline").text("15 Days");
            }else if(response.price_plan_urgency_id == 4){
                $("#deadline").text("10 Days");
            }else if(response.price_plan_urgency_id == 5){
                $("#deadline").text("7 Days");
            }else if(response.price_plan_urgency_id == 6){
                $("#deadline").text("5 Days");
            }else if(response.price_plan_urgency_id == 7){
                $("#deadline").text("4 Days");
            }else if(response.price_plan_urgency_id == 8){
                $("#deadline").text("3 Days");
            }else if(response.price_plan_urgency_id == 9){
                $("#deadline").text("48 hours");
            }else if(response.price_plan_urgency_id == 10){
                $("#deadline").text("24 hours");
            }else if(response.price_plan_urgency_id == 11){
                $("#deadline").text("12 hours");
            }else if(response.price_plan_urgency_id == 12){
                $("#deadline").text("6 hours");
            }else if(response.price_plan_urgency_id == 13){
                $("#deadline").text("3 hours");
            }else{
                $("#deadline").text("");
            }
            //Displaying Academic level
            if(response.price_plan_level_id == 1){
                $("#academic-level").text("High school");
            }else if(response.price_plan_level_id == 2){
                $("#academic-level").text("College");
            }else if(response.price_plan_level_id == 3){
                $("#academic-level").text("Graduate");
            }else if(response.price_plan_level_id == 4){
                $("#academic-level").text("Masters");
            }else if(response.price_plan_level_id == 5){
                $("#academic-level").text("PhD");
            }else{
                $("#academic-level").text("");
            }
            
             //Displaying type of work
             if(response.price_plan_type_of_work_id == 1){
                $("#type_of_work").text("Essay");
            }else if(response.price_plan_type_of_work_id == 2){
                $("#type_of_work").text("Articles");
            }else if(response.price_plan_type_of_work_id == 3){
                $("#type_of_work").text("Assignment");
            }else if(response.price_plan_type_of_work_id == 4){
                $("#type_of_work").text("Book Reports");
            }else if(response.price_plan_type_of_work_id == 5){
                $("#type_of_work").text("Book Reviews");
            }else if(response.price_plan_type_of_work_id == 6){
                $("#type_of_work").text("Case Study");
            }else if(response.price_plan_type_of_work_id == 7){
                $("#type_of_work").text("College Paper");
            }else if(response.price_plan_type_of_work_id == 8){
                $("#type_of_work").text("Coursework");
            }else if(response.price_plan_type_of_work_id == 9){
                $("#type_of_work").text("eBooks");
            }else if(response.price_plan_type_of_work_id == 10){
                $("#type_of_work").text("Homework");
            }else if(response.price_plan_type_of_work_id == 11){
                $("#type_of_work").text("Lab Reports");
            }else if(response.price_plan_type_of_work_id == 12){
                $("#type_of_work").text("Movie Review");
            }else if(response.price_plan_type_of_work_id == 13){
                $("#type_of_work").text("News Release");
            }else if(response.price_plan_type_of_work_id == 14){
                $("#type_of_work").text("Research Paper");
            }else if(response.price_plan_type_of_work_id == 15){
                $("#type_of_work").text("Research Proposal");
            }else if(response.price_plan_type_of_work_id == 2){
                $("#type_of_work").text("School Paper");
            }else if(response.price_plan_type_of_work_id == 3){
                $("#type_of_work").text("Speech");
            }else if(response.price_plan_type_of_work_id == 4){
                $("#type_of_work").text("Term Paper");
            }else if(response.price_plan_type_of_work_id == 5){
                $("#type_of_work").text("Admission Essay");
            }else if(response.price_plan_type_of_work_id == 6){
                $("#type_of_work").text("Annotated Bibliography");
            }else if(response.price_plan_type_of_work_id == 7){
                $("#type_of_work").text("Application letter");
            }else if(response.price_plan_type_of_work_id == 8){
                $("#type_of_work").text("Argumentative Essay");
            }else if(response.price_plan_type_of_work_id == 9){
                $("#type_of_work").text("Biography");
            }else if(response.price_plan_type_of_work_id == 10){
                $("#type_of_work").text("Business Plan");
            }else if(response.price_plan_type_of_work_id == 11){
                $("#type_of_work").text("Cover Letter");
            }else if(response.price_plan_type_of_work_id == 12){
                $("#type_of_work").text("Creative Writing");
            }else if(response.price_plan_type_of_work_id == 13){
                $("#type_of_work").text("Criticle Thinking");
            }else if(response.price_plan_type_of_work_id == 14){
                $("#type_of_work").text("Litrature Review");
            }else if(response.price_plan_type_of_work_id == 15){
                $("#type_of_work").text("Personal Statement");
            }else if(response.price_plan_type_of_work_id == 12){
                $("#type_of_work").text("Presentation");
            }else if(response.price_plan_type_of_work_id == 13){
                $("#type_of_work").text("Report");
            }else if(response.price_plan_type_of_work_id == 14){
                $("#type_of_work").text("Scholarship Essay");
            }else if(response.price_plan_type_of_work_id == 15){
                $("#type_of_work").text("Powerpoint presentation");
            }else{
                $("#type_of_work").text("");
            }
        },
        error : function(request,error)
        {
            console.log("error");
        }
    });
}
