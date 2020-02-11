<style>
.colorpicker-saturation {
  width: 100px;
  height: 100px;
  background-image: url("<?php echo base_url("");?>assets/images/saturation.png");
  cursor: crosshair;
  float: left;
}
.colorpicker-saturation i {
  display: block;
  height: 5px;
  width: 5px;
  border: 1px solid #000;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  position: absolute;
  top: 0;
  left: 0;
  margin: -4px 0 0 -4px;
}
.colorpicker-saturation i b {
  display: block;
  height: 5px;
  width: 5px;
  border: 1px solid #fff;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.colorpicker-hue,
.colorpicker-alpha {
  width: 15px;
  height: 100px;
  float: left;
  cursor: row-resize;
  margin-left: 4px;
  margin-bottom: 4px;
}
.colorpicker-hue i,
.colorpicker-alpha i {
  display: block;
  height: 1px;
  background: #000;
  border-top: 1px solid #fff;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  margin-top: -1px;
}
.colorpicker-hue {
  background-image: url("<?php echo base_url("");?>assets/images/hue.png");
}
.colorpicker-alpha {
  background-image: url("<?php echo base_url("");?>assets/images/alpha.png");
  display: none;
}
.colorpicker-saturation,
.colorpicker-hue,
.colorpicker-alpha {
  background-size: contain;
}
.colorpicker {
  padding: 4px;
  min-width: 130px;
  margin-top: 1px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  z-index: 2500;
}
.colorpicker:before,
.colorpicker:after {
  display: table;
  content: "";
  line-height: 0;
}
.colorpicker:after {
  clear: both;
}
.colorpicker:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: -7px;
  left: 6px;
}
.colorpicker:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  position: absolute;
  top: -6px;
  left: 7px;
}
.colorpicker div {
  position: relative;
}
.colorpicker.colorpicker-with-alpha {
  min-width: 140px;
}
.colorpicker.colorpicker-with-alpha .colorpicker-alpha {
  display: block;
}
.colorpicker-color {
  height: 10px;
  margin-top: 5px;
  clear: both;
  background-image: url("<?php echo base_url("");?>assets/images/alpha.png");
  background-position: 0 100%;
}
.colorpicker-color div {
  height: 10px;
}
.colorpicker-selectors {
  display: none;
  height: 10px;
  margin-top: 5px;
  clear: both;
}
.colorpicker-selectors i {
  cursor: pointer;
  float: left;
  height: 10px;
  width: 10px;
}
.colorpicker-selectors i + i {
  margin-left: 3px;
}
.colorpicker-element .input-group-addon i,
.colorpicker-element .add-on i {
  display: inline-block;
  cursor: pointer;
  height: 16px;
  vertical-align: text-top;
  width: 16px;
}
.colorpicker.colorpicker-inline {
  position: relative;
  display: inline-block;
  float: none;
  z-index: auto;
}
.colorpicker.colorpicker-horizontal {
  width: 110px;
  min-width: 110px;
  height: auto;
}
.colorpicker.colorpicker-horizontal .colorpicker-saturation {
  margin-bottom: 4px;
}
.colorpicker.colorpicker-horizontal .colorpicker-color {
  width: 100px;
}
.colorpicker.colorpicker-horizontal .colorpicker-hue,
.colorpicker.colorpicker-horizontal .colorpicker-alpha {
  width: 100px;
  height: 15px;
  float: left;
  cursor: col-resize;
  margin-left: 0px;
  margin-bottom: 4px;
}
.colorpicker.colorpicker-horizontal .colorpicker-hue i,
.colorpicker.colorpicker-horizontal .colorpicker-alpha i {
  display: block;
  height: 15px;
  background: #ffffff;
  position: absolute;
  top: 0;
  left: 0;
  width: 1px;
  border: none;
  margin-top: 0px;
}
.colorpicker.colorpicker-horizontal .colorpicker-hue {
  background-image: url("<?php echo base_url("");?>assets/images/hue-horizontal.png");
}
.colorpicker.colorpicker-horizontal .colorpicker-alpha {
  background-image: url("<?php echo base_url("");?>assets/images/alpha-horizontal.png");
}
.colorpicker.colorpicker-hidden {
  display: none;
}
.colorpicker.colorpicker-visible {
  display: block;
}
.colorpicker-inline.colorpicker-visible {
  display: inline-block;
}
.colorpicker-right:before {
  left: auto;
  right: 6px;
}
.colorpicker-right:after {
  left: auto;
  right: 7px;
}
.colorpicker-no-arrow:before {
  border-right: 0;
  border-left: 0;
}
.colorpicker-no-arrow:after {
  border-right: 0;
  border-left: 0;
}
/*# sourceMappingURL=bootstrap-colorpicker.css.map */
</style>