jun.Educationstore = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        jun.Educationstore.superclass.constructor.call(this, Ext.apply({
            storeId: 'EducationStoreId',
            url: 'admin/Education/?output=json',           
            root: 'results',
            totalProperty: 'total',
            fields: [                
                {name:'id'},
{name:'user_id'},
{name:'degree'},
                
            ]
        }, cfg));
    }
});
jun.rztEducation = new jun.Educationstore();
jun.rztEducation.load();
