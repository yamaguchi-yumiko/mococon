const{src, dest} = require('gulp');
const loadPlugins = require('gulp-load-plugins');
const $ = loadPlugins();

function icon(){
      return src('./*.jpeg')
      .pipe($.imageResize({
      ///  width: 200,
        //height: 100,
        //crop:true,//切りとる（縦横比が合わなくなる場合）
        //upscale:true, //拡大して画像をアップするか
      }))
　　　.pipe($.imagemin({
      }))
      .pipe($.rename({
      }))
      .pipe(dest('./dist/images/icon'));
}
  exports.icon = icon;
