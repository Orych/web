const methods = require('./methods');
const { app } = require('./testData');

const changedSlideApp = {
  ...app,
};
changedSlideApp.currSlideId = '1601835516025';

const changedSlideApp = {
  ...app,
};
changedSlideApp.choosedObjectId = '1601835542129';



describe('changing slide method test', () => {
  test('changing slide', () => {
    expect(methods.changeSlide(app, '1601835516025')).toEqual(changedSlideApp);
  });
});

describe('resize img test', () => {
  test('resizing image', () => {
    expect(methods.resizeImage(app, '1601835542129','100px','100px')).toEqual(changedSlideApp);
  });
});

const changedSlideApp = {
  ...app,
};
changedSlideApp.choosedObjectId = '1601835540226';


describe('changing toggleBoldText test', () => {
  test('bold text changing', () => {
    expect(methods.changeStoggleBoldText(app, '1601835540226')).toEqual(changedSlideApp);
  });
});

describe('toggleItalicText test', () => {
  test('italic style changing', () => {
    expect(methods.toggleItalicText(app, '1601835540226')).toEqual(changedSlideApp);
  });
});

describe('toggleUnderlinedText test', () => {
  test('toggle Underlined Text changing', () => {
    expect(methods.toggleUnderlinedText(app, '1601835540226')).toEqual(changedSlideApp);
  });
});


describe('changeTextSize function test', () => {
  test('change Text Size', () => {
    expect(methods.changeTextSize(app, '1601835540226', '25px')).toEqual(changedSlideApp);
  });
});

