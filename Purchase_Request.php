<div class="row">
	<div class="col-xs-12">
		<div class="row">
            <div class="easyui-panel" title="Form Purchase Requisition" style="width:100%;max-width:100%;height:'auto';padding:10px">
                <form id="fm" method="post" novalidate enctype="multipart/form-data">
                    <table width="80%" style="margin: 10px">
                        <thead>						
                            <th>Judul Dokumen</th>
                            <th>Supplier</th>
                            <th>Dibuat tanggal</th>
                            <th>Dibutuhkan tanggal</th>
                            
                        </thead>
                        <tbody>
                            <td><input id="project" name="project" style="width:500px;color: black;font-size: 15px;" placeholder="Optional" data-options="prompt:'Optional'">
                            </td>
                            <td >
                                <select id="dept" class="easyui-dropdown" style="width: 200px" >
                                </select>
                            </td>
                            <td><input id="dcdate" name="dcdate" style="width:150px" class="easyui-datebox">
                            </td>
                            <td>
                                <input id="rqdate" name="rqdate" style="width:150px" class="easyui-datebox">
                            </td>
                           
                        </tbody>
                    </table>
                    <div class="hr hr10 hr-dotted"></div>
                    <table id="dg" title="Daftar Item/Material/Tools/Consumables" class="easyui-datagrid" style="width:100%;height:250px"
					        toolbar="#toolbar" fitColumns="false" singleSelect="true">
					    <thead>
					        <tr>
					        	<!-- <th field="item" width="20">Item</th> -->
					            <th field="itemcode" width="150">Kode</th>
					            <th field="itmname" width="300">Nama Item</th>
					            <th field="qty" width="120">Banyak</th>
					            <th field="unit" width="80">Unit</th>
					            <th field="price" width="120">Harga</th>
					            <!-- <th field="curr" width="80">Currency</th> -->
					            <th field="subtot" width="120">Sub Total</th>
					            <th field="remark" width="350">Keterangan</th> 
					        </tr>
					    </thead>
					</table>
						<div id="toolbar">
						    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="NewItem('new')">Tambah Item</a>
						    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="NewItem('edit')">Edit PR Item</a>
						    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="deleterow()">Hapus PR Item</a>
						</div>
                </form>
                <div style="margin-bottom: 10px;margin-top:5px;">							          
					<a href="javascript:void(0)" class="easyui-linkbutton c6" data-options="iconCls:'icon-ok'" style="width:150px;height: 30px;background: #267a97;color: #fff;" onclick="createPR()">Simpan</a>
				</div>
                <!-- MessageBox -->
                <div id="smsg" class="xdialog" iconCls="icon-ok" minimizable="false" maximizable="false" collapsible="false" closable="true" toolbar="#dlg-toolbar" buttons="#dlg-buttons">
                    order dibuat
	            </div>

                <!-- Dialog Add New Item -->
                <div id="addItem" class="zdialog" iconCls="icon-ok" minimizable="false" maximizable="false" collapsible="false" closable="true">
                    <table cellspacing="2" cellpadding="20px">
                        <tr>
                            <td style="width: 200px;">
                                <h5 style="margin-left: 30px;">Kode
                            </td>
                            <td style="width: 20px">:</td>
                            <td>
                                <input id="itemcode" name="itemcode" class="easyui-textbox" style="width:200px;" readonly required="true">
                                <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:100px; background: #2ecac4" onclick="cari()">Cari</a>
                            </td>
                        </tr>

                        <tr>
                            <td><h5 style="margin-left: 30px;">Nama Item </td>
                            <td style="width: 20px">:</td>
                            <td>
                                <input id="itmname" name="itmname" style="width:500px" class="easyui-textbox" required="true" readonly/>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 100px"><h5 style="margin-left: 30px;">Banyaknya </td><td>:</td>
                            <td>
                                <input id="qty" name="qty" style="width:200px" class="easyui-numberbox" required="true" data-options="min:0,precision:2,decimalSeparator:'.',groupSeparator:','"/>
                            </td>
                        </tr>

                        <tr>
                            <td><h5 style="margin-left: 30px;">Unit</td><td>:</td>
                            <td><input id="uom" name="uom" style="width:100px" class="easyui-textbox" placeholder="unit" ></td>
                        </tr>

                        <tr>
                            <td><h5 style="margin-left: 30px;">Harga </td><td>:</td>
                            <td>
                                <input id="price" name="price" style="width:200px" class="easyui-numberbox" value="0" data-options="min:0,precision:0,decimalSeparator:'.',groupSeparator:','">
                            </td>
                        </tr>
                        <tr>
                            <td><h5 style="margin-left: 30px;">Jumlah </td><td style="width: 20px">:</td>
                            <td>
                                <input id="total" name="total" style="width:200px" class="easyui-numberbox" value="0" readonly="true" data-options="min:0,precision:0,decimalSeparator:'.',groupSeparator:','"/>
                            </td>
                        </tr>
                    </table>
                    <h5 style="margin-left: 30px;">Keterangan</h5>
                    <div style="margin-bottom:20px; margin-left: 30px;">
                        <textarea  type="text" id="remark" name="message" style="width:90%;height:100px;"></textarea>
                    </div>
                    <div style="margin-bottom: 10px;margin-left: 30px;">							            	
                        <a href="javascript:void(0)" class="easyui-linkbutton c6" data-options="iconCls:'icon-add'" style="width:150px;height: 30px;background: #267a97;color: #fff;" onclick="addItem()">Add</a>
                    </div>
                </div>
                <!-- End Dialog Add New Item -->

                <!-- Dialog Cari Item -->
                <div id="dd" class="ydialog" iconCls="icon-ok" minimizable="false" maximizable="false" collapsible="false" closable="true" >
                    <br>
                    <div>
                        <tr>													
                            <td>
                                <input type="text" name="carcode" id="carcode" class="form-control" placeholder="Cari berdasarka ItemCode"/>
                            </td>	
                            <td>
                                <input type="text" name="carnam" id="carnam" class="form-control" placeholder="Cari berdasarka ItemName"/>
                            </td>													
                        </tr>
                    </div><br>
                    <table id="igr"></table>
                </div>
                <!-- End Dialog Cari Item -->
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // alert(mainurl);
    let base_url = mainurl + 'duta';
    
	var zcarnam;
	var zcarcode;
	var action;
	var rIndex;

	function clearForm(){
		$('#itemcode, #itmname, #uom, #dtu').textbox({
			value:''
		})
		$('#qty, #price, #total, #moq, #spq').numberbox({
			value:''
		})
		$('#remark').val("");
		// $('#curr').val("");
    }
    
    function NewItem(param){
        // this.getCurrency();
        if(param == "new"){
            action = '';
            clearForm();
            $('#addItem').dialog({
                title: 'Tambah PR Item',
                width: '60%',
                height: 500,
                padding:'20px',
                closed: false,
                cache: false,
                modal: true
            });
        }else{
            var row = $('#dg').datagrid('getSelected');	

            rIndex = $("#dg").datagrid("getRowIndex", row);
            if(rIndex == "-1"){
                alert('Pilih PR Item');
            }else{
                action = 'X';
                clearForm();
                console.log(row.itemcode);
                $('#itemcode').textbox({
                        iconAlign:'left',
                        value:row.itemcode
                    })

                    $('#itmname').textbox({
                        iconAlign:'left',
                        value:row.itmname
                    })

                    $('#qty').numberbox({
                        iconAlign:'left',
                        value:row.qty
                    })

                    $('#uom').textbox({
                        iconAlign:'left',
                        value:row.unit
                    })
                    $('#price').numberbox({
                        iconAlign:'left',
                        value:row.price
                    })

                    $('#total').numberbox({
                        iconAlign:'left',
                        value:row.subtot
                    })

                    $('#remark').val(row.remark);
                    // $('#curr').val(row.curr);

                $('#addItem').dialog({
                    title: 'Edit PR Item',
                    width: '80%',
                    height: 500,
                    padding:'20px',
                    closed: false,
                    cache: false,
                    modal: true
                });
            }
        }		
    }

    $('#qty, #price').numberbox({
		"onChange":function(){  
			var a = $("#qty").val();
			var b = $("#price").val();
			var c = a * b;
			$('#total').numberbox({
				value:c
			});
		}  
	});

    function addItem(){
		var valdQty  = $("#qty").val();
		var itemcode = $("#itemcode").val();
		if(itemcode == ""){
			windowMessage("Input ItemCode")
		}else if(valdQty == ""){
			windowMessage("Input Quantity")
		}else{
			if (action =="X"){

				doeditRow(rIndex);
			}else{
				var count = $('#dg').datagrid('getRows');

				$('#dg').datagrid('appendRow',{
					item        : count.length + 1,
					itemcode    : $("#itemcode").val(), 
					itmname     : $("#itmname").val(),
					qty 		: $("#qty").val(),
					unit        : $("#uom").val(),
					price       : $("#price").val(),
					// curr        : $("#curr").val(), 
					subtot      : $("#total").val(),
					remark      : $("#remark").val()
				});
			}

			$('#dg').datagrid('reload'); 
			$('#addItem').dialog('close');
		}
	}

    function cari(){		
        $('#carcode').val('');
        $('#carnam').val('');
        $('#dd').dialog({
            title: 'List Item',
            width: '65%',
            height: 600,
            closed: false,
            cache: false,
            modal: true
        });

        let urlproduk = base_url + 'data_barang.php';

        // $(document).ready(function(){
            // alert("cari");
            $('#igr').datagrid({	
                title:'',
                width:'100%',
                height:450,
                singleSelect:true,
                rownumbers:true,
                pagination:false,
                idField:'ItemCode',
                url:urlproduk,
                columns:[[
                {field:'ItmsGrpNam',title:'Item Group',width:150},
                {field:'ItemCode',title:'Item Code',width:150},
                {field:'ItemName',title:'Item Name',width:450,editor:'text'},
                {field:'ItemUnit',title:'Item Unit',width:80,editor:'text'},					
                ]],
            });
        // });

        var vitemcode = '';
        var vitemname = '';
        // $(function(){
            $('#igr').datagrid({
                onDblClickRow:function(){
                    $('#price').textbox({
                                    value:''
                                })
                    var row = $("#igr").datagrid("getSelected");

                    vitemcode = row.ItemCode;
                    vitemname = row.ItemName;
                    vuom      = row.ItemUnit;

                    $('#itemcode').textbox({
                        iconAlign:'left',
                        value:vitemcode
                    })

                    if(vitemname == "." || vitemname == "-"){
                        $('#itmname').textbox({
                            iconAlign:'left',
                            readonly:false,
                            value:vitemname
                        })
                    }else{
                        $('#itmname').textbox({
                            iconAlign:'left',
                            readonly:true,
                            value:vitemname
                        })
                    }

                    $('#uom').textbox({
                        iconAlign:'left',
                        value:vuom
                    })

                    $('#dd').dialog('close');
                }
            });
        // });
    }

    // function getCurrency(){
		$(document).ready(function(){		
            
			$.ajax({
				type:'GET',
				url:base_url + '/currencyList',
				dataType: "json",
				// data:{ItemCode:''},
				cache:false,
				success:function(results){
					var count = results.length;

					var listItems;
					for (var i = 0; i < count; i++) {
						listItems += "<option value='" + results[i].curr + "'>" + results[i].curr + "</option>";
					};
					$("#curr").html(listItems);
				}
			});
		});
	// }

    //Get Department List
    $(document).ready(function(){
		$.ajax({
			type:'GET',
			url:base_url + 'data_supplier',
			dataType: "json",
			cache:false,
			success:function(results){
                console.log(results);
				var icount = results.length;
				var deptlist;
				for (var i = 0; i < icount; i++) {
					deptlist += "<option value='" + results[i].deptid + "'>" + results[i].deptName + "</option>";
				};
				$("#dept").html(deptlist);
			}
		});
	});

    $(document).ready(function () {	
		// $('#dcdate').datebox({

        // });
        $('#dcdate, #rqdate').datebox({
			// readonly:true,
			formatter: function(date) {
				var y = date.getFullYear();
				var m = date.getMonth() + 1;
				var d = date.getDate();

				var r = y + '-' + m + '-' + d;
				return r;
			},

			parser: function(s) {
				if (!s) {
					return new Date();
				}
				var ss = (s.split('-'));
				var y = parseInt(ss[0], 10);
				var m = parseInt(ss[1], 10);
				var d = parseInt(ss[2], 10);

				if (!isNaN(y) && !isNaN(m) && !isNaN(d)) {
					return new Date(y, m - 1, d);
				} else {
					return new Date();
				}
			}
		});
		var opts = $('#dcdate').datebox('options');
		$('#dcdate').datebox('setValue', opts.formatter(new Date()));
        $('#rqdate').datebox('setValue', opts.formatter(new Date()));
	});

    //Save PR
    function createPR(){
		var prNumb;
		var djson    = {};
		var jsonTemp = {};
		var dataH    = [];
		var data     = [];
        var prdata   = {};
		var rows     = $('#dg').datagrid('getRows');
        let dataLength;
		
        //Header Data
        djson.project = $("#project").val()
		djson.dept    = $("#dept").val()
		djson.dcdate  = $("#dcdate").val()
		djson.rqdate  = $("#rqdate").val()
        djson.currency = $("#curr").val()
		dataH.push(djson);
        // prdata.push(djson)
        
        //Items Data
        for(var i=0; i<rows.length; i++){
            dataLength = i + 1
            jsonTemp = {}
			jsonTemp.prItem = i + 1
			jsonTemp.ItemCode = rows[i].itemcode
			jsonTemp.ItemName = rows[i].itmname
			jsonTemp.qty = rows[i].qty
			jsonTemp.uom = rows[i].unit 
			jsonTemp.price = rows[i].price 
			jsonTemp.total = rows[i].subtot
			jsonTemp.remark = rows[i].remark
			data.push(jsonTemp);
		}

        prdata = {
            'header' : dataH,
            'items'  : data,
            'rows'   : dataLength
        }

        $.ajax({
			type:'POST',
			url:base_url + '/create',
			dataType: "json",
			data:prdata,
			cache:false,
			success:function(results){
                console.log(results);
                if (results.msg === "sukses") {
                    $('#dg').datagrid('loadData', {"total":0,"rows":[]});
                    $('#project').val('');
					$.messager.show({	
						title: 'Sukses',
						msg: 'PR ' + results[0].prNumb + ' Created'
					});
				} else {
					$.messager.show({	
						title: 'Error',
						msg: results.msg
					});
				}
			}
		});		
	}
    
    function deleterow(){
		var row = $('#dg').datagrid('getSelected');					
		var rowIndex = $("#dg").datagrid("getRowIndex", row);

		var index = rowIndex+1;
		$.messager.confirm('Confirm','Are you sure to delete PR item '+ index +' ?',function(r){
			if (r){
				$('#dg').datagrid('deleteRow', rowIndex);
			}
		});
	}

    function doeditRow(rowIndex) {

$('#dg').datagrid('updateRow', {
    index: rowIndex,
    row: {
        itemcode  : $("#itemcode").val(), 
        itmname   : $("#itmname").val(),
        qty 	  : $("#qty").val(),
        unit      : $("#uom").val(),
        price     : $("#price").val(),
        subtot    : $("#total").val(),
        remark    : $("#remark").val()
    }
});
}
</script>