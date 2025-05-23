const iconv = require("iconv-lite");

module.exports = {
  files: ["./src/**/*.html", 
          "./src/**/*.php", 
          "./src/parts/**/*.php", 
          "./src/**/*.css", 
          "./src/**/*.js"
         ],
  watch: true,
  notify: false,
  open: true,
  startPath: "/src/",
  proxy: {
    target: "http://iveco/src/",
    ws: true,
    /*
    proxyRes: [
      (proxyRes, req, res) => {
        if (
          proxyRes.headers &&
          proxyRes.headers["content-type"] &&
          proxyRes.headers["content-type"].match("text/html")
        ) {
          const _end = res.end;
          const _writeHead = res.writeHead;
          let buffer = Buffer.from("");
 
          proxyRes.on("data", chunk => {
            buffer = Buffer.concat([buffer, chunk]);
          });

          res.write = () => {};
          res.writeHead = (...args) => {
            _writeHead.apply(res, args);
          };

          res.end = () => {
            _end.call(res, iconv.decode(buffer, "windows-1250"));
          };
        }
      },
      function(res) {
        if (
          res.headers &&
          res.headers["content-type"] &&
          res.headers["content-type"].match("text/html")
        )
        res.headers["content-type"] = "text/html; charset=utf-8";
      }
    ]
    */
  }
};
