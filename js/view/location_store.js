jun.Locationstore = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        jun.Locationstore.superclass.constructor.call(this, Ext.apply({
            storeId: 'LocationStoreId',
            url: 'admin/Location/?output=json',           
            root: 'results',
            totalProperty: 'total',
            fields: [                
                {name:'id'},
{name:'user_id'},
{name:'location'},
                
            ]
        }, cfg));
    }
});
jun.rztLocation = new jun.Locationstore();
jun.rztLocation.load();
