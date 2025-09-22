// @ts-check
import {test, expect} from '@playwright/test';
import AxeBuilder from '@axe-core/playwright';

test('page is baseline accessible', async ({page}) => {
    await page.goto('http://a11y.test');

    const accessibilityScanResults = await new AxeBuilder({page}).analyze();

    expect(accessibilityScanResults.violations).toEqual([]);
});

test('clicking the products link opens the subnavigation', async ({page}) => {
    await page.goto('http://a11y.test');

    await expect(page.locator('#subnav')).toBeHidden();

    await page.getByRole('link', {name: "Prodotti"}).click();

    await expect(page.locator('#subnav')).toBeVisible();

});


test('clicking outside the subnavigation closes the subnavigation', async ({page}) => {
    await page.goto('http://a11y.test');

    await page.getByRole('link', {name: "Prodotti"}).click();

    await expect(page.locator('#subnav')).toBeVisible();

    await page.getByRole('document').click();

    await expect(page.locator('#subnav')).toBeHidden();

});








test('pressing Space on the products link opens the subnavigation', async ({page}) => {
    await page.goto('http://a11y.test');

    await expect(page.locator('#subnav')).toBeHidden();

    await page.getByRole('button', {name: "Prodotti"}).press('Space');

    await expect(page.locator('#subnav')).toBeVisible();
});
//
//
test('pressing Esc on the document closes the subnavigation', async ({page}) => {
    await page.goto('http://a11y.test');

    await expect(page.locator('#subnav')).toBeHidden();

    await page.getByRole('button', {name: "Prodotti"}).press('Enter');

    await expect(page.locator('#subnav')).toBeVisible();

    await page.getByRole('document').press('Escape');

    await expect(page.locator('#subnav')).toBeHidden();
});
















/*test('popover is open when clicking on navigation item', async ({page}) => {
    await page.goto('http://a11y.test');

    await page.getByRole('button').press('Enter');

    await expect(page.locator('#test')).toBeVisible();

    await page.getByRole('document').click();

    await expect(page.locator('#test')).toBeHidden();
});*/











