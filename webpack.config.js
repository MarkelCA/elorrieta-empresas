const path = require("path");

module.exports = {
  
    entry: './src/index.js',
    output: {
        // the output bundle
        // saves the files into the dist/static folder
        path: path.resolve(__dirname, './src/js/dist'),
        // set static as src="static/main.js as relative path
        // publicPath: 'public/src/js'
        },
    module: {

      rules: [
        {
          test: /\.(png|jpe?g|gif|svg|cur)$/i,
          
          loader: 'file-loader',
          options: {
            name: '[path][name].[ext]',
            context: path.resolve("./"),
            outputPath: '../../img/dist/',
            publicPath: '../',
            useRelativePaths: true            
          },
        },
      
        {
          test: /\.css$/i,
          use: ["style-loader", "css-loader"],
        },
        {
          test: /\.s[ac]ss$/i,
          use: [
            // Creates `style` nodes from JS strings
            "style-loader",
            // Translates CSS into CommonJS
            "css-loader",
            // Compiles Sass to CSS
            "sass-loader",
          ],
        },
        {
        test: /\.less$/i,
        use: [
          // compiles Less to CSS
          "style-loader",
          "css-loader",
          "less-loader",
        ],
      },
        {
          test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '[name].[ext]',
                outputPath: 'fonts/'
              }
            }
          ]
        }
        
      ],
    },
  };
  