import { defineWorkspace } from 'vitest/config';

export default defineWorkspace({
    test: {
        environment: 'happy-dom',
    },
});
