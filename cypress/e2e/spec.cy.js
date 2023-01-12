describe('app', () => {
    it('should update the data and show it on screen', () => {
        cy.visit('http://eban.test/profile');
        cy.get('[data-test="save"]').click();
    })
})
