const fs = require('fs');
const path = require('path');
const crypto = require('crypto');

module.exports = function (eleventyConfig) {

  eleventyConfig.addShortcode("cssVersion", function (filePath) {
    try {
      const content = fs.readFileSync(path.join(__dirname, filePath));
      return crypto.createHash('md5').update(content).digest('hex').slice(0, 8);
    } catch (e) {
      return Date.now();
    }
  });

  eleventyConfig.addFilter("commaNumber", value => Number(value).toLocaleString());
  eleventyConfig.addFilter("oneDecimal", value => Number(value).toFixed(1));

  eleventyConfig.addPassthroughCopy([
    "articles/images",
    "assets",
    "images",
    "shark-diving-tours/hawaii/oahu/oahu-shark-diving-tour-photos/from-insta-2023",
    "snorkel-tour/images",
    "robots.txt",
    "_redirects",
    "!**/.DS_Store",
  ]);


  return {
    dir: {
      input: ".",
      includes: "_includes",
      data: "_data",
      output: "_site",
    },
  };
};
