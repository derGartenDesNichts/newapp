jun.Usersstore = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        jun.Usersstore.superclass.constructor.call(this, Ext.apply({
            storeId: 'UsersStoreId',
            url: 'admin/Users/?output=json',           
            root: 'results',
            totalProperty: 'total',
            fields: [                
                {name:'id'},
{name:'name'},
                
            ]
        }, cfg));
    }
});
jun.rztUsers = new jun.Usersstore();
jun.rztUsers.load();
