/**
 * Created by Sabbir on 10/24/13.
 */

_jqGrid = {
    _setTrace:function(data){
        if(window.console && console.log){
            console.log(data)
        }
    },
    _init:function(){
        if(!_jqGrid.gridId){
            _jqGrid.gridId = "jqGrid";
        }
        if(!_jqGrid.pagerId){
            _jqGrid.pagerId = "jqPager";
        }

        _jqGrid.page = 1;
        _jqGrid.rows = 10;
        _jqGrid.sidx = 'id';
        _jqGrid.sord = 'DESC';

        //_jqGrid.url = "";

        _jqGrid.rowNum = 20;
        _jqGrid.rowList = [10,20,30,50,70,100,150,200,300,400,500,1000];
        _jqGrid.caption = "Gird View";
        _jqGrid.displayEdit = false;
        _jqGrid.displayAdd = false;
        _jqGrid.displayDelete = false;
        _jqGrid.displaySearch = false;
        _jqGrid.multipleSearch = true;

        _jqGrid.footerRow = false;
        _jqGrid.rowNumbers = true;

        _jqGrid.setPredefinedSearch = false;

        if(!_jqGrid.postData){
            _jqGrid.postData = {};
        }
        if(!_jqGrid.titleList){
            _jqGrid.titleList = [];
            _jqGrid.modelList = [{}];
        }

        //extra grid options
        _jqGrid.showNavGrid = true;
        _jqGrid.showFilterToolBar = true;
        _jqGrid.showExportOption = false;

        //_jqGrid.navGridOptions = {search:_jqGrid.displaySearch,add:_jqGrid.displayAdd,edit:_jqGrid.displayEdit,delete:_jqGrid.displayDelete};

        _jqGrid.gridDatePicker();
    },
    theGrid:function(){

        if(_jqGrid.url && _jqGrid.titleList.length>0){

           _jqGrid.gridInstance = $("#"+_jqGrid.gridId).jqGrid(
                                        {
                                            url:_jqGrid.url,
                                            datatype:'json',
                                            mtyope:'GET',
                                            postData:_jqGrid.postData,
                                            colNames:_jqGrid.titleList,
                                            colModel:_jqGrid.modelList,
                                            pager:"#"+_jqGrid.pagerId,
                                            rowNum:_jqGrid.rowNum,
                                            rowList:_jqGrid.rowList,
                                            sortname:_jqGrid.sidx,
                                            sortorder:_jqGrid.sord,
                                            viewrecords:true,
                                            autowidth:true,
                                            shrinkToFit:true,
                                            multiselect:false,
                                            rownumbers:_jqGrid.rowNumbers,
                                            caption:_jqGrid.caption,
                                            footerrow: _jqGrid.footerRow,
                                            userDataOnFooter: _jqGrid.footerRow,
                                            search:_jqGrid.setPredefinedSearch
                                        }
            );//end jqgrid

            $('.ui-jqgrid-bdiv').css("height","auto");

            //should display nav Grid?
            if(_jqGrid.showNavGrid==true){

                $("#"+_jqGrid.gridId).jqGrid('navGrid',
                    '#'+_jqGrid.pagerId,

                    {
                        search:_jqGrid.displaySearch,add:_jqGrid.displayAdd,
                        edit:_jqGrid.displayEdit,del:_jqGrid.displayDelete
                    },
                    {reloadAfterSubmit:true,closeAfterEdit:true},
                    {reloadAfterSubmit:true,closeAfterAdd:true},
                    {reloadAfterSubmit:true},{multipleSearch:_jqGrid.multipleSearch,recreateFilter:true,closeAfterSearch:true,closeAfterReset:true}
                );
            }

            //should display filter toolbar?
            if(_jqGrid.showFilterToolBar==true){
                $('#'+_jqGrid.gridId).jqGrid('filterToolbar',{
                    stringResult:true,
                    searchOnEnter:true
                    // beforeSearch:function(){alert($("#gs_status").val())}
                });
            }

        }
    },
    reloadGrid:function(){
        _jqGrid.gridInstance.trigger('reloadGrid');
    },
    gridDatePicker:function(){
       // $(".jqGridCustomDateRange").hide();
        $(".gridDatePicker").datepicker({
            dateFormat:'yy-mm-dd'
        })
    }
    ,
    deleteRecord:function(url,id){
        var x = confirm("Are you sure you want to delete?");
        if(x){
            $.ajax({
                url:url+"/"+id+"/?jqGrid=true&ajax=true",
                type:"post",
                data:{id:id},
                success:function(data)
                {
                    //callJqGrid(trans_url,trans_columns,true);
                    _jqGrid.reloadGrid();
                },error:function(){
                    alert('Delete failed!');
                    //_jqGrid.gridInstance.trigger('reloadGrid');
                }
            });
        }

    },

    dialogBoxCenterPositioned:function(custom){
            $("#search_jqGrid").click(function()
            {
                $("#searchmodfbox_jqGrid").addClass('dialog_custom');
                var win = $(window);
                var dialog = $(".dialog_custom" );
                var top = (win.innerHeight() - dialog.height()) / 2;
                var left = (win.innerWidth() - dialog.width()) / 2;
               if(custom==true){
                   dialog.css('width',615+'px');
               }
                dialog.css({
                    position: "absolute",
                    top: top,
                    left: left
                });
                win.scrollTop(0);
            });

    },
    removeCustomRange:function(num){

        $("#search_jqGrid").click(function()
        {
         $("#searchmodfbox_jqGrid").bind('click',function()
            {
                $(".input-elm").on('click',function()
                {
                    var id=$(this).attr('id');
                    $("#"+id+" option:last-child[value="+num+"]").remove();
                });

            });
        });
    },

    gridCustomSearchOnEnterKeyPress:function(){

        $('#customValue').keyup(function(event){
            if(event.which == 13) {
                event.preventDefault();
                $("#"+_jqGrid.gridId)[0].triggerToolbar();
            }
        });
    }
};
