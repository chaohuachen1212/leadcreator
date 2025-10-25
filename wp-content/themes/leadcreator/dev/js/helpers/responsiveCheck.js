const breakpointEl = document.querySelector('#breakpoints');

const isAboveBreakpoint = () => 2 == getComputedStyle(breakpointEl).zIndex;

const isBelowBreakpoint = () => 1 == getComputedStyle(breakpointEl).zIndex;

// console.log(getComputedStyle(breakpointEl).zIndex);

export {isAboveBreakpoint, isBelowBreakpoint};
