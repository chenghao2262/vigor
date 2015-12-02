
function showDetail(target){
    target.unshift('today\'s steps detail')
    var chart = c3.generate({
      bindto: '#zoom',
      data: {
        columns: [target]
      },

      axis:{
        x:{
            type:'category',
            categories:['0','','','1','','','2','','','3','','','4','','','5','','','6','','','7','','','8','','','9','','','10','','','11','','','12','','','13','','','14','','','15','','','16','','','17','','','18','','','19','','','20','','','21','','','22','','','23','',''],
            tick: {
              multiline:false,
              culling: {
                  max: 96 // the number of tick texts will be adjusted to less than this value
              }
            }
        }
      },
      zoom: {
        enabled: true
      }
    });
}

