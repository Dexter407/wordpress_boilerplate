//Compliability width NodeJS v14
const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const MediaQuerySplittingPlugin = require("media-query-splitting-plugin");
const MediaQueryPlugin = require("media-query-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const cssnano = require("cssnano");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const CopyPlugin = require('copy-webpack-plugin'); // https://webpack.js.org/plugins/copy-webpack-plugin/


const JS_DIR = path.resolve(__dirname, "src/sjs");
const SCSS_DIR = path.resolve(__dirname, "src/scss");
const IMG_DIR = path.resolve(__dirname, "src/images");
const LIB_DIR = path.resolve( __dirname, 'src/library' );
const BUILD_DIR = path.resolve(__dirname, "build");
const localDomain = 'shynh.localhost';

const entry = {
  scripts: JS_DIR + "/scripts.js",
  styles: SCSS_DIR + "/style.scss",
};

const output = {
  path: BUILD_DIR,
  filename: "js/[name].js",
};

const rules = [
  {
    test: /\.js$/,
    include: [JS_DIR],
    exclude: /node_modules/,
    use: "babel-loader",
  },
  {
    test: /\.scss$/,
    exclude: /node_modules/,
    use: [
      MiniCssExtractPlugin.loader,
      "css-loader",
      // MediaQueryPlugin.loader,
      {
        loader: "sass-loader",
        options: {
          sourceMap: true,
        },
      },
    ],
  },
  {
    test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
    use: {
      loader: "file-loader",
      options: {
        name: "[path][name].[ext]",
        publicPath: "production" === process.env.NODE_ENV ? "../" : "../../",
      },
    },
  },
  {
    test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
    exclude: [IMG_DIR, /node_modules/],
    use: {
      loader: "file-loader",
      options: {
        name: "[path][name].[ext]",
        publicPath: "production" === process.env.NODE_ENV ? "../" : "../../",
      },
    },
  },
];

const plugins = (argv) => [
  new CleanWebpackPlugin({
    cleanStaleWebpackAssets: "production" === argv.mode,
  }),

  new MiniCssExtractPlugin({
    filename: "css/[name].css",
  }),
  new CopyPlugin( {
		patterns: [
			{ from: LIB_DIR, to: BUILD_DIR + '/library' }
		]
	} ),
  // new MediaQueryPlugin({
  //   include: ["main1"],
  //   queries: {
  //     "print, screen and (min-width: 60em)": "mobile",
  //     "print, screen and (min-width: 60em) and (orientation: landscape)":
  //       "desktop",
  //     "(min-width: 576px)": "xs",
  //     "(min-width: 768px)": "sm",
  //     "(min-width: 992px)": "md",
  //   },
  // }),
  new BrowserSyncPlugin({
    host: localDomain,
    port: 8080,
    proxy: localDomain,
    files:[BUILD_DIR + '/css/*.css'],
    injectCss: true,
  }, { reload: false, }),
  // new MediaQuerySplittingPlugin({
  //   // Prevent splitting for some files
  //   exclude: {
  //     tailwind: /tailwind-css/,
  //   },
  //   // This is default config (optional)
  //   media: {
  //     xs: {
  //       query: "(min-width: 576px)",
  //       withCommonStyles: false,
  //     },
  //     sm: {
  //       query: "(min-width: 768px)",
  //       withCommonStyles: false,
  //     },
  //     md: {
  //       query: "(min-width: 992px)",
  //       withCommonStyles: false,
  //     },
  //     lg: {
  //       query: "(min-width: 1200px)",
  //       withCommonStyles: false,
  //     },
  //   },
  //   minify: true,
  // }),
];

module.exports = (env, argv) => ({
  entry: entry,
  output: output,
  devtool: "source-map",
  module: {
    rules: rules,
  },
  optimization: {
    minimizer: [
      new OptimizeCssAssetsPlugin({
        cssProcessor: cssnano,
      }),

      new UglifyJsPlugin({
        cache: false,
        parallel: true,
        sourceMap: false,
      }),
    ],
  },
  watch: true,
  plugins: plugins(argv),
  externals: {
    jquery: "jQuery",
  },
});
