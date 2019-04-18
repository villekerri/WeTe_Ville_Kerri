describe('notes module', function () {
    beforeEach(function() {
        notes.clear();
        notes.add('first note');
        notes.add('second note');
        notes.add('third note');
        notes.add('fourth note');
        notes.add('fifth note');
    });
    it("should be able to add a new note", function () {
        expect(notes.add('sixth note')).toBe(true);
        expect(notes.count()).toBe(6);
    });
    it("should ignore blank notes", function () {
        expect(notes.add('')).toBe(false);
        expect(notes.count()).toBe(5);
    });
    it('should ignore notes containing only whitespace', function() {
        expect(notes.add('   ')).toBe(false);
        expect(notes.count()).toBe(5);
        //pending();
    });
    it('should require a string parameter', function() {
        expect(notes.add()).toBe(false);
        expect(notes.count()).toBe(5);
        //pending();
    });

    it('should find a note', function() {
        expect(notes.add('asd')).toBe(true);
        expect(notes.find('asd')).toBe(true);
        //pending();
    });
    it('should remove a note', function() {
        expect(notes.remove(2)).toBe(true);
        expect(notes.find('second note')).toBe(false);
        //pending();
    });
});

var notes = (function() {
    var list = [];

    return {
        add: function(note) {
            if (note && note != '   ') {
                var item = {timestamp: Date.now(), text: note};
                list.push(item);
                return true;
            }
            return false;
        },
        remove: function(index) {
            if (index <= list.length){
                list.splice(index);
                return true;
            }
            return false;
        },
        count: function() {
            return list.length;
        },
        list: function() {},
        find: function(str) {
            for (var i = 0 ; i <list.length ; i++) {
                if (list[i].text == str){
                    return true;
                }
            }
            return false;
        },
        clear: function() {
            list.splice(0, list.length);
        }
    }
}());