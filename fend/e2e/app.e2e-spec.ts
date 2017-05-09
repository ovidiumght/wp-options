import { WpOptionsPage } from './app.po';

describe('wp-options App', () => {
  let page: WpOptionsPage;

  beforeEach(() => {
    page = new WpOptionsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
