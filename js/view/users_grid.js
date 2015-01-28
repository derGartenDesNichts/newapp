jun.UsersGrid=Ext.extend(Ext.grid.GridPanel ,{        
	title:"Users",
        id:'docs-jun.UsersGrid',
	width:400,
	height:250,
        sm: new Ext.grid.RowSelectionModel({singleSelect:true}),
	columns:[
                        {
			header:'id',
			sortable:true,
			resizable:true,                        
                        dataIndex:'id',
			width:100
		},
                                {
			header:'name',
			sortable:true,
			resizable:true,                        
                        dataIndex:'name',
			width:100
		},
		{
			header:'location',
			sortable:true,
			resizable:true,                        
                        dataIndex:'location',
			width:100
		},
                		
	],
	initComponent: function(){
	this.store = jun.rztUsers;
        this.bbar = {
            items: [
           {
            xtype: 'paging',
            store: this.store,
            displayInfo: true,
            pageSize: 10
           }]
        };
            
           this.tbar = {
                xtype: 'toolbar',
                items: [
                    {
                        xtype: 'button',
                        text: 'Add',
                        ref: '../btnAdd'
                    },
                    {
                        xtype: 'button',
                        text: 'Edit',
                        ref: '../btnEdit'
                    },                    
                    {
                        xtype: 'button',
                        text: 'Delete',
                        ref: '../btnDelete'
                    }
                ]
            };
		jun.UsersGrid.superclass.initComponent.call(this);
	        this.btnAdd.on('Click', this.loadForm, this);
                this.btnEdit.on('Click', this.loadEditForm, this);
                this.btnDelete.on('Click', this.deleteRec, this);
                this.getSelectionModel().on('rowselect', this.getrow, this);
	},
        
        getrow: function(sm, idx, r){
            this.record = r;

            var selectedz = this.sm.getSelections();
        },
        
        loadForm: function(){
            var form = new jun.UsersWin({modez:0});
            form.show();
        },
        
        loadEditForm: function(){
            
            var selectedz = this.sm.getSelected();
            
            //var dodol = this.store.getAt(0);
             if(selectedz == ""){
                 Ext.MessageBox.alert("Warning","Chose an action");
                 return;
             }
            var idz = selectedz.json.id;
            var form = new jun.UsersWin({modez:1, id:idz});
            form.show(this);
            form.formz.getForm().loadRecord(this.record);
        },
        
        deleteRec : function(){
            Ext.MessageBox.confirm('Question','Do you really want to delete it?', this.deleteRecYes, this);
        },
        
        deleteRecYes : function(){
        
            var record = this.sm.getSelected();

            // Check is list selected
            if(record == ""){
                Ext.MessageBox.alert("Warning","You didn't chose the service type");
                return;
            }

            Ext.Ajax.request({
                waitMsg: 'Please Wait',
                url: 'admin/Users/delete/id/' + record.json.id,
                //url: 'index.php/api/Users/delete/' + record[0].json.nosjp,
                method: 'POST',
                
                success: function(response){
                  jun.rztUsers.reload();
                  Ext.Msg.alert('Service', 'Delete ok');

                },
                failure: function(response){
                  Ext.MessageBox.alert('error','could not connect to the database. retry later');
                  }
             });
        
        }
})
