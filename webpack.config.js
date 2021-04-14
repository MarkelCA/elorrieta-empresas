const path = require("path");

module.exports = {
    entry: './public/src/index.js',
    output: {
        // the output bundle
        // saves the files into the dist/static folder
        path: path.resolve(__dirname, 'public/src/js/dist'),
        // set static as src="static/main.js as relative path
        // publicPath: 'public/src/js'
        },
    module: {

      rules: [
        {
          test: /\.(png|jpe?g|gif)$/i,
          loader: 'file-loader',
          options: {
            publicPath: 'public',
          },
        },
      ],
    },
  };
  