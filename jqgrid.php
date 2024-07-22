<?php include('header.php'); ?>
<div class="container">
    <div class="page-inner">
        <table class="table table-bordered table-hover table-striped" id="countjqGrid"></table>
        <div id="Pager"></div>
    </div>
</div>
<?php include('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
		
        var myData = [
            { id: 1, name: 'John Doe', age: 30, email: 'john@example.com' },
            { id: 2, name: 'Jane Smith', age: 25, email: 'jane@example.com' },
            { id: 3, name: 'Mike Johnson', age: 40, email: 'mike@example.com' },
            { id: 4, name: 'Emily Davis', age: 28, email: 'emily@example.com' }
        ];

        $("#countjqGrid").jqGrid({
            data: myData,
            datatype: "local",
            colModel: [
                { label: 'ID', name: 'id', key: true, width: 75 },
                { label: 'Name', name: 'name', width: 150 },
                { label: 'Age', name: 'age', width: 100 },
                { label: 'Email', name: 'email', width: 200 }
                // Add more columns as needed
            ],
            viewrecords: true,
            rowList: [10, 50, 100, 200, 500, 1000],
            sortname: 'id', // Adjust column name if needed
            sortorder: "desc",
            width: $("#countjqGrid").parent().width() - 10,
            height: '350px',
            rowNum: 10,
            pager: "#Pager",
            gridview: true,
            rownumbers: true,
            styleUI: 'Bootstrap',
            footerrow: true,
            footerData: true,
            gridComplete: function () {
                // Optional: Additional grid complete logic
            }
        });

        // Enable filter toolbar with search operators and advanced search
        $("#countjqGrid").jqGrid('filterToolbar', {
            searchOperators: true,
            stringResult: true, // Return search string instead of filter object
            defaultSearch: 'cn', // Default search operator: contains
            searchOnEnter: false, // Perform search on pressing Enter key
            multipleSearch: true, // Enable multiple field advanced search
            multipleGroup: true // Enable multiple group advanced search
        });

    });
</script>